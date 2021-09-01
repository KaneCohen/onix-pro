<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Mariojgt\Onixpro\Models\OnixPage;
use Mariojgt\Onixpro\Helpers\OnixBuilder;
use Mariojgt\Onixpro\Models\OnixKey;
use Mariojgt\Onixpro\Models\OnixBlock;
use Mariojgt\Onixpro\Helpers\OnixProApi;

class OnixProApiValidationController extends Controller
{
    public function validaKeyAndSave(Request $request)
    {
        $request->validate([
            'onix_key'       => 'required',
        ]);

        OnixKey::firstOrCreate([
            'key' => Request('onix_key'),
        ], [
            'key' => Request('onix_key'),
        ]);

        $managerApi = new OnixProApi();
        $requestApi = $managerApi->getKeyInformation();

        if ($requestApi->json()['data']['is_valid'] == 1) {
            return redirect()->back()->with('success', 'Token Valid.');
        } else {
            return redirect()->back()->with('error', 'Token not valid.');
        }
    }

    public function downloadCompoents(Request $request)
    {
        $request->validate([
            'id'       => 'required',
        ]);

        $managerApi = new OnixProApi();
        $requestApi = $managerApi->downloadComponent(Request('id'));
        // Get the json data
        $data            = $requestApi->json();
        // Create a new compoents
        $block           = new OnixBlock();
        $block->label    = $data['label'];
        $block->category = $data['category'];
        $block->class    = $data['class'];
        $block->content  = $data['content'];
        $html = (array)json_decode($data['content']);
        // Create the fisical file
        $onixFileManger = new OnixBuilder();
        $filePath = $onixFileManger
            ->savePageFile($html, Str::slug($block->label), 'views/components/onix');
        $block->filepath  = $filePath;
        $block->save();

        return json_encode([
            'data' => [
                'message' => 'component success download an ready to use.'
            ],
        ]);
    }
}
