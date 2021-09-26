<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Mariojgt\Onixpro\Helpers\OnixProApi;

class OnixproDashboardController extends Controller
{
    // Onix Pro Version
    public $version = '1.0.7';

    /**
     * @return [blade view]
     */
    public function index()
    {
        $news = Cache::remember('onix-news', 3600, function () {
            $apiManager = new OnixProApi();
            $new        = $apiManager->getNews();
            return $new->json()['data'];
        });

        // Version of the package
        $version = $this->version;

        return view('onixpro::content.dashboard.home', compact('news', 'version'));
    }
}
