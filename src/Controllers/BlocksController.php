<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mariojgt\Onixpro\Models\Block;

class BlocksController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        $blocks = Block::paginate(10);
        return view('onixpro::content.block.index', compact('blocks'));
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

    public function edit(Request $request, Block $block)
    {
        return view('onixpro::content.block.edit', compact('block'));
    }
}
