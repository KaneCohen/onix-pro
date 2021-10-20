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
        // End point of your server
        $this->end_point    = 'https://onixpro.net';
        // The key we store in the database
        $key = OnixKey::first();
        // If the key is empty we send null so the api can handle the error
        if (!empty($key)) {
            $this->bearerToken = $key->key;
        } else {
            $this->bearerToken = 'null';
        }
    }

    /**
     * Get the user key information
     * @return [type]
     */
    public function getKeyInformation()
    {
        $response = Http::withToken($this->bearerToken)->get($this->end_point . '/api/key/validate', [
            //'name' => 'Steve',
            //'role' => 'Network Administrator',
        ]);

        return $response;
    }

    /**
     * Try to downlaod the component from the server
     * @param mixed $id
     *
     * @return [type]
     */
    public function downloadComponent($id)
    {
        $response = Http::withToken($this->bearerToken)->get($this->end_point . '/api/components/downlaod/' . $id, [
            //'name' => 'Steve',
            //'role' => 'Network Administrator',
        ]);

        return $response;
    }

    /**
     * Try to download the page from the server
     * @param mixed $id
     *
     * @return [type]
     */
    public function downloadPage($id)
    {
        $response = Http::withToken($this->bearerToken)->get($this->end_point . '/api/page/downlaod/' . $id, [
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
