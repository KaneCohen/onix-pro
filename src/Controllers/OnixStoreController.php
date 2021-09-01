<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mariojgt\Onixpro\Models\OnixPage;
use App\Http\Controllers\Controller;
use Mariojgt\Onixpro\Helpers\OnixBuilder;

class OnixStoreController  extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        return view('onixpro::content.store.index_components');
    }
}
