<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mariojgt\Onixpro\Models\OnixBlock;
use App\Http\Controllers\Controller;

class AutoloadController extends Controller
{
    public function autoload()
    {
        // Get all the local components
        $blocks = OnixBlock::all();

        $finalData = [];
        // Loop those componenets
        foreach ($blocks as $key => $value) {
            if (empty($value->content)) {
                continue;
            }
            $html = (array)json_decode($value->content);
            $finalData[] = [
                'name'     => $value->label,
                'category' => $value->category,
                'content'  => $html['gjs-html'],
            ];
        }

        // Example component loading
        return response()->json([
            'data' => $finalData
        ]);
    }
}
