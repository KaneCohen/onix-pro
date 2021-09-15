<?php

namespace Mariojgt\Onixpro\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Mariojgt\Onixpro\Helpers\OnixProApi;

class OnixproDashboardController extends Controller
{
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

        return view('onixpro::content.dashboard.home', compact('news'));
    }
}
