<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;

class HomeContoller extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        return view('onixpro::content.index');
    }
}
