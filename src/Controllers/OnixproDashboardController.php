<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;

class OnixproDashboardController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        return view('onixpro::content.dashboard.index');
    }

    public function onixHome()
    {
        return view('onixpro::content.dashboard.home');
    }
}
