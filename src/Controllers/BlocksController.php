<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;

class BlocksController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        return view('onixpro::content.block.index');
    }
}
