<?php

namespace Mariojgt\Onixpro\Helpers;

use DOMDocument;
use Mariojgt\Onixpro\Helpers\Tidy;
use Illuminate\Support\Facades\File;

class OnixBuilder
{
    public static function savePageFile($content, $fileName, $path = null)
    {
        // If the path is default to a generic
        if ($path == null) {
            $filePath = 'views/pages/';
            $path     = resource_path($filePath);
        } else {
            $filePath = $path;
            $path = resource_path($path);
        }
        // If the path don;t exist create one
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

        // Prepare the data to be saved in the blade file
        $bladeFileData = "
            " . $content['gjs-html'] . "
            @push('css')
            <style>
                " . $content['gjs-css'] . "
            </style>
            @endpush
        ";

        // Format the html
        $Tidy         = new Tidy($bladeFileData);
        $htmlFormated = $Tidy->HTML($bladeFileData);

        $fileName = '/onix_' . $fileName . '.blade.php';
        $filePath .= $fileName; // reference to load
        $path     .= $fileName; // where to save

        // Add the content to the file
        File::put($path, $htmlFormated);
        return $filePath;
    }

    public static function tidyHTML($buffer)
    {
        // load our document into a DOM object
        $dom = new DOMDocument();
        // we want nice output
        $dom->preserveWhiteSpace = false;
        $dom->loadHTML($buffer);
        $dom->formatOutput = true;
        return ($dom->saveHTML());
    }
}
