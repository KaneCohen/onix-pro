<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnixStoreController  extends Controller
{
    /**
     * @return [blade view]
     */
    public function componentsStore()
    {
        return view('onixpro::content.store.index_components');
    }

    /**
     * @return [blade view]
     */
    public function pagedStore()
    {
        return view('onixpro::content.store.index_pages');
    }
}
