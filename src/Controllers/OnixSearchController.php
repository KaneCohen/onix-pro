<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mariojgt\Onixpro\Models\OnixPage;
use Mariojgt\Onixpro\Models\OnixBlock;

class OnixSearchController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index(Request $request)
    {
        $request->validate([
            'search'       => 'required',
        ]);

        // All pages active and incative
        $onixBlock = OnixBlock::where('label', 'like', '%' . Request('search') . '%')
            ->orWhere('category', 'like', '%' . Request('search') . '%')
            ->latest()->paginate(10);
        $onixpage = OnixPage::where('title', 'like', '%' . Request('search') . '%')
            ->latest()->paginate(10);

        return view('onixpro::content.search.index', compact(
            'onixBlock',
            'onixpage',
        ));
    }
}
