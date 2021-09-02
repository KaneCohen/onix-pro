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
    /**
     * Validate the onix key and save in the database
     * @param Request $request
     *
     * @return [type]
     */
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

    /**
     * Logic to download the component in the store not that you need a valid key
     * @param Request $request
     *
     * @return [type]
     */
    public function downloadCompoents(Request $request)
    {
        $request->validate([
            'id'       => 'required',
        ]);

        $managerApi = new OnixProApi();
        $requestApi = $managerApi->downloadComponent(Request('id'));
        // Get the json data
        $data            = $requestApi->json();

        if (!empty($data['status']) && $data['status'] == 'false') {
            return json_encode([
                'data' => [
                    'message' => 'max download reach please upgrade to the premium plan.',
                    'status'  => false
                ],
            ]);
        } else {
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

    /**
     * Logic to pages the component in the store not that you need a valid key
     * @param Request $request
     *
     * @return [type]
     */
    public function downloadPages(Request $request)
    {
        $request->validate([
            'id'       => 'required',
        ]);

        $managerApi = new OnixProApi();
        $requestApi = $managerApi->downloadPage(Request('id'));

        // Get the json data
        $data                   = $requestApi->json();

        if (!empty($data['status']) && $data['status'] == 'false') {
            return json_encode([
                'data' => [
                    'message' => 'max download reach please upgrade to the premium plan.',
                    'status'  => false
                ],
            ]);
        } else {

            $page                   = new OnixPage();
            $page->title            = $data['title'];
            $page->page_title       = $data['page_title'];
            $page->slug             = $data['slug'];
            $page->meta_description = $data['meta_description'];

            // Save in the grape js format
            $page->content = $data['content'];
            $html = (array)json_decode($page->content);
            // Create the fisical file
            $onixFileManger = new OnixBuilder();
            $filePath = $onixFileManger
                ->savePageFile($html, Str::slug($page->title), 'views/pages/onix');
            // Save the file path
            $page->filepath = $filePath;
            $page->save();

            return json_encode([
                'data' => [
                    'message' => 'page success download an ready to use.'
                ],
            ]);
        }
    }
}
