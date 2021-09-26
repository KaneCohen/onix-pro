<?php

namespace Mariojgt\Onixpro\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Mariojgt\Onixpro\Models\OnixPage;
use Mariojgt\Onixpro\Helpers\OnixBuilder;

class PagesController extends Controller
{
    /**
     * @return [blade view]
     */
    public function index()
    {
        $pages = OnixPage::paginate(10);
        return view('onixpro::content.page.index', compact('pages'));
    }

    public function store(Request $request)
    {
        // Validate the user Note the small update in the password verification
        $request->validate([
            "title"            => ['required', 'string', 'max:255'],
            "page_title"       => ['required', 'string', 'max:255'],
            "slug"             => ['required', 'string', 'max:255'],
            "meta_description" => ['required', 'string', 'max:255'],
        ]);

        DB::beginTransaction();
        $page                   = new OnixPage();
        $page->title            = Request('title');
        $page->page_title       = Request('page_title');
        $page->slug             = Request('slug');
        $page->meta_description = Request('meta_description');
        // Add some demo data
        $page->content =
            '{"gjs-html":"<div class=\"min-h-screen bg-gradient-to-b from-purple-500 to-indigo-500 flex items-center justify-center\"><div class=\"bg-white p-4 rounded-md\"><div class=\"w-64 h-44 bg-gray-200 animate-pulse\"><\/div><div class=\"mt-8 h-32 w-full space-y-3\"><div class=\"w-20 h-6 bg-gray-200 rounded-full animate-pulse\"><\/div><div class=\"w-full h-4 bg-gray-200 rounded-full animate-pulse\"><\/div><div class=\"w-full h-4 bg-gray-200 rounded-full animate-pulse\"><\/div><div class=\"w-1-2 h-4 bg-gray-200 rounded-full animate-pulse\"><\/div><\/div><\/div><\/div>","gjs-components":"[{\"classes\":[\"min-h-screen\",\"bg-gradient-to-b\",\"from-purple-500\",\"to-indigo-500\",\"flex\",\"items-center\",\"justify-center\"],\"components\":[{\"classes\":[\"bg-white\",\"p-4\",\"rounded-md\"],\"components\":[{\"classes\":[\"w-64\",\"h-44\",\"bg-gray-200\",\"animate-pulse\"]},{\"classes\":[\"mt-8\",\"h-32\",\"w-full\",\"space-y-3\"],\"components\":[{\"classes\":[\"w-20\",\"h-6\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]},{\"classes\":[\"w-full\",\"h-4\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]},{\"classes\":[\"w-full\",\"h-4\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]},{\"classes\":[{\"name\":\"w-1-2\",\"label\":\"w-1\/2\"},\"h-4\",\"bg-gray-200\",\"rounded-full\",\"animate-pulse\"]}]}]}]}]","gjs-assets":"[]","gjs-css":"* { box-sizing: border-box; } body {margin: 0;}","gjs-styles":"[]"}';
        $html = (array)json_decode($page->content);

        // Create the fisical file
        $onixFileManger = new OnixBuilder();
        $filePath = $onixFileManger
            ->savePageFile($html, Str::slug($page->title), 'views/pages/onix');
        // Save the file path
        $page->filepath = $filePath;
        $page->save();
        DB::commit();

        return redirect()->back()->with('success', 'Created with success');
    }

    public function update(Request $request, OnixPage $page)
    {
        // Validate the user Note the small update in the password verification
        $request->validate([
            "title"            => ['required', 'string', 'max:255'],
            "page_title"       => ['required', 'string', 'max:255'],
            "slug"             => ['required', 'string', 'max:255'],
            "meta_description" => ['required', 'string', 'max:255'],
        ]);

        $page->title            = Request('title');
        $page->page_title       = Request('page_title');
        $page->slug             = Request('slug');
        $page->meta_description = Request('meta_description');
        $page->standalone       = intval(Request('standalone'));
        $page->save();

        return redirect()->back()->with('success', 'Updated with success');
    }

    public function edit(Request $request, OnixPage $page)
    {
        return view('onixpro::content.page.edit', compact('page'));
    }

    public function editHtml(Request $request, OnixPage $page)
    {
        return view('onixpro::content.page.html', compact('page'));
    }

    /**
     * Load the page in the grape js using request
     * @param OnixPage $page
     *
     * @return [type]
     */
    public function editorLoad(OnixPage $page)
    {
        return response()->json([
            'data' => json_decode($page->content)
        ]);
    }

    /**
     * Save the grape js page in the database
     * @param Request $request
     * @param OnixPage $page
     *
     * @return [type]
     */
    public function editorSave(Request $request, OnixPage $page)
    {
        // Create the fisical file using the onix helper
        $onixFileManger = new OnixBuilder();
        // check if the page is standalone
        $saveAdPage = $page->standalone == 1 ? true : false;
        // save the html data into a blade file
        $filePath = $onixFileManger
            ->savePageFile(Request('data'), Str::slug($page->title), 'views/pages/onix', $saveAdPage);
        // Save in the database so we can edit later
        $page->content  = json_encode(Request('data'));
        $page->filepath = $filePath;
        $page->save();

        return response()->json([
            'message' => 'data Saved'
        ]);
    }


    /**
     * Fuction that duplicate this block
     *
     * @param Request $request
     * @param OnixPage $page
     *
     * @return [type]
     */
    public function duplicate(Request $request, OnixPage $page)
    {
        DB::beginTransaction();
        // Copy attributes
        $clone        = $page->replicate();
        $clone->title = $clone->title . '_copy';
        //save model before you recreate relations (so it has an id)
        $clone->push();

        $saveAdPage = $page->standalone == 1 ? true : false;
        // Create the fisical file
        $onixFileManger = new OnixBuilder();
        $html = (array)json_decode($page->content);
        $onixFileManger
            ->savePageFile($html, Str::slug($clone->title), 'views/pages/onix', $saveAdPage);

        DB::commit();

        return redirect()->back()->with('success', 'Duplicated with success');
    }

    public function destroy(Request $request, $page)
    {
        $page = OnixPage::findOrFail(decrypt($page));
        $file_path = resource_path($page->filepath);
        if (File::exists($file_path)) File::delete($file_path);
        $page->delete();

        return redirect()->back()->with('success', 'Deleted with success');
    }
}
