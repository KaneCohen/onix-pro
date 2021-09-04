<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Mariojgt\Onixpro\Models\OnixBlock;
use Mariojgt\Onixpro\Helpers\OnixBuilder;

class BlocksController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        $blocks = OnixBlock::paginate(10);
        return view('onixpro::content.block.index', compact('blocks'));
    }

    public function store(Request $request)
    {
        // Validate the user Note the small update in the password verification
        $request->validate([
            'label'    => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
        ]);

        $block           = new OnixBlock();
        $block->label    = Request('label');
        $block->category = Request('category');
        // Add some demo data
        $block->content =
            '{"gjs-html":"<div class=\"min-h-screen bg-gradient-to-b from-purple-500 to-indigo-500 flex items-center justify-center\"><div class=\"bg-white p-4 rounded-md\"><div class=\"w-64 h-44 bg-gray-200 animate-pulse\"><\/div><div class=\"mt-8 h-32 w-full space-y-3\"><div class=\"w-20 h-6 bg-gray-200 rounded-full animate-pulse\"><\/div><div class=\"w-full h-4 bg-gray-200 rounded-full animate-pulse\"><\/div><div class=\"w-full h-4 bg-gray-200 rounded-full animate-pulse\"><\/div><div class=\"w-1-2 h-4 bg-gray-200 rounded-full animate-pulse\"><\/div><\/div><\/div><\/div>","gjs-components":"[{\"classes\":[\"min-h-screen\",\"bg-gradient-to-b\",\"from-purple-500\",\"to-indigo-500\",\"flex\",\"items-center\",\"justify-center\"],\"components\":[{\"classes\":[\"bg-white\",\"p-4\",\"rounded-md\"],\"components\":[{\"classes\":[\"w-64\",\"h-44\",\"bg-gray-200\",\"animate-pulse\"]},{\"classes\":[\"mt-8\",\"h-32\",\"w-full\",\"space-y-3\"],\"components\":[{\"classes\":[\"w-20\",\"h-6\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]},{\"classes\":[\"w-full\",\"h-4\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]},{\"classes\":[\"w-full\",\"h-4\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]},{\"classes\":[{\"name\":\"w-1-2\",\"label\":\"w-1\/2\"},\"h-4\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]}]}]}]}]","gjs-assets":"[]","gjs-css":"* { box-sizing: border-box; } body {margin: 0;}","gjs-styles":"[]"}';
        $block->save();

        // Save the fisical file
        $this->physicalSave($block);

        return redirect()->back()->with('success', 'Created with success');
    }

    public function update(Request $request, OnixBlock $block)
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

    public function edit(Request $request, OnixBlock $block)
    {
        $html = (array)json_decode($block->content);

        return view('onixpro::content.block.edit', compact('block', 'html'));
    }

    public function editHtml(Request $request, OnixBlock $block)
    {
        return view('onixpro::content.block.html', compact('block'));
    }

    /**
     * Load the information to the grapejs editor using request
     * @param OnixBlock $block
     *
     * @return [type]
     */
    public function editorLoad(OnixBlock $block)
    {
        return response()->json([
            'data' => json_decode($block->content)
        ]);
    }

    /**
     * Save the grapejs information in the database
     * @param Request $request
     * @param OnixBlock $block
     *
     * @return [type]
     */
    public function editorSave(Request $request, OnixBlock $block)
    {
        // Save in the database so we can edit later
        $block->content  = json_encode(Request('data'));
        $block->save();

        // Save the fisical file
        $this->physicalSave($block);

        return response()->json([
            'message' => 'data Saved'
        ]);
    }

    /**
     * Fuction that duplicate this block
     *
     * @param Request $request
     * @param OnixBlock $block
     *
     * @return [type]
     */
    public function duplicate(Request $request, OnixBlock $block)
    {
        DB::beginTransaction();
        // Copy attributes
        $clone        = $block->replicate();
        $clone->label = $clone->label . '_copy';
        //save model before you recreate relations (so it has an id)
        $clone->push();
        // Save the fisical file
        $this->physicalSave($clone);
        DB::commit();

        return redirect()->back()->with('success', 'Duplicated with success');
    }

    /**
     * Create a fisical file
     *
     * @param OnixBlock $block
     *
     * @return [type]
     */
    public function physicalSave(OnixBlock $block)
    {
        // Create the physical file
        $onixFileManger = new OnixBuilder();
        // Create a physical file
        $html           = (array)json_decode($block->content);
        $filePath       = $onixFileManger
            ->savePageFile($html, Str::slug($block->label), 'views/components/onix/' . $block->category);

        // Save the file path
        $block->filepath = $filePath;
        $block->save();
    }

    public function destroy(Request $request, $block)
    {
        $block     = OnixBlock::findOrFail(decrypt($block));
        $file_path = resource_path($block->filepath);
        if (File::exists($file_path)) File::delete($file_path);
        $block->delete();

        return redirect()->back()->with('success', 'Deleted with success');
    }
}
