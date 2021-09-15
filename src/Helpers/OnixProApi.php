<?php

namespace Mariojgt\Onixpro\Helpers;

use DOMDocument;
use Mariojgt\Onixpro\Models\OnixKey;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class OnixProApi
{
    public function __construct()
    {
        $this->end_point    = 'https://onixpro.net';
        $key = OnixKey::first();
        if (!empty($key)) {
            $this->bearerToken = $key->key;
        } else {
            $this->bearerToken = 'null';
        }
    }

    public function getKeyInformation()
    {
        $response = Http::withToken($this->bearerToken)->get($this->end_point . '/api/key/validate', [
            //'name' => 'Steve',
            //'role' => 'Network Administrator',
        ]);

        return $response;
    }

    public function downloadComponent($id)
    {
        $response = Http::withToken($this->bearerToken)->get($this->end_point . '/api/components/downlaod/'. $id, [
            //'name' => 'Steve',
            //'role' => 'Network Administrator',
        ]);

        return $response;
    }

    public function downloadPage($id)
    {
        $response = Http::withToken($this->bearerToken)->get($this->end_point . '/api/page/downlaod/'. $id, [
            //'name' => 'Steve',
            //'role' => 'Network Administrator',
        ]);

        return $response;
    }

    /**
     * Return teh update new from the server
     * @return [type]
     */
    public function getNews()
    {
        $response = Http::get($this->end_point . '/api/onix/news/');

        return $response;
    }
}
