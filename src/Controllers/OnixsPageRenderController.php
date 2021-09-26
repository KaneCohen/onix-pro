<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;
use Mariojgt\Onixpro\Models\OnixPage;

class OnixsPageRenderController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index($slug)
    {
        $page = OnixPage::where('slug', $slug)->first();
        if (empty($page)) {
            abort(404);
        }
        // RETURN THE BLADE FILE NAME
        return view($page->blade());
    }
}
