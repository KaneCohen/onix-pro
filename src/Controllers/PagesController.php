<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mariojgt\Onixpro\Models\Page;
use App\Http\Controllers\Controller;
use Mariojgt\Onixpro\Helpers\OnixBuilder;

class PagesController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        $pages = Page::paginate(10);
        return view('onixpro::content.page.index', compact('pages'));
    }

    public function store(Request $request)
    {
        // Validate the user Note the small update in the password verification
        $request->validate([
            'label'    => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
        ]);

        $block           = new Block();
        $block->label    = Request('label');
        $block->category = Request('category');
        $block->save();

        return redirect()->back()->with('success', 'Created with success');
    }

    public function update(Request $request, Block $block)
    {
        // Validate the user Note the small update in the password verification
        $request->validate([
            'label'    => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
        ]);

        $block->label    = Request('label');
        $block->category = Request('category');
        $block->save();

        return redirect()->back()->with('success', 'Updated with success');
    }

    public function edit(Request $request, Block $block)
    {
        $html = (array)json_decode($block->content);

        return view('onixpro::content.block.edit', compact('block', 'html'));
    }

    public function editHtml(Request $request, Block $block)
    {
        return view('onixpro::content.block.html', compact('block'));
    }

    public function editorLoad(Block $block)
    {
        return response()->json([
            'data' => json_decode($block->content)
        ]);
    }

    public function editorSave(Request $request, Block $block)
    {
        // Create the fisical file
        $onixFileManger = new OnixBuilder();
        $filePath = $onixFileManger
            ->savePageFile(Request('data'), Str::slug($block->label), 'views/components/onix/' . $block->category);
        // Save in the database so we can edit later
        $block->content  = json_encode(Request('data'));
        $block->filepath = $filePath;
        $block->save();

        return response()->json([
            'message' => 'data Saved'
        ]);
    }
}
