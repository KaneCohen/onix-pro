<?php

namespace Mariojgt\Onixpro\Helpers;

use DOMDocument;
use Mariojgt\Onixpro\Helpers\Tidy;
use Illuminate\Support\Facades\File;

class OnixBuilder
{
    /**
     * This fuction transform html in to a blde fiel and try to format
     * @param mixed $content
     * @param mixed $fileName
     * @param null $path
     * @param bool $pageTemplate
     * @param mixed
     *
     * @return [type]
     */
    public static function savePageFile($content, $fileName, $path = null, $pageTemplate = false,)
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

        // Check wich is the format it will be saved
        if ($pageTemplate) {
            $htmlFile = self::standaloneHtmlFormat($content);
        } else {
            $htmlFile = self::normalHtmlFormat($content);
        }

        // File Name
        $fileName = '/onix_' . $fileName . '.blade.php';
        $filePath .= $fileName; // reference to load
        $path     .= $fileName; // where to save

        // Add the content to the file
        File::put($path, $htmlFile);
        return $filePath;
    }

    /**
     * This Fuction Tidy string in to html if is valid
     * @param mixed $buffer
     *
     * @return [type]
     */
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

    /**
     * This Fuction Format html and return string ready to be save in a blade file
     * @param mixed $content
     *
     * @return [type]
     */
    public static function normalHtmlFormat($content)
    {
        $content = self::replaceBreakingWorlds($content);

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

        return $htmlFormated;
    }

    /**
     * This Return the formated html return string ready to be save in a blade file
     *
     * @param mixed $content
     *
     * @return [type]
     */
    public static function standaloneHtmlFormat($content)
    {

        $content = self::replaceBreakingWorlds($content);

        // Prepare the data to be saved in the blade file
        $bladeFileData = '
            <!DOCTYPE html>
            <html lang="en" data-theme="dark" >
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>{{ $title ?? "Onixpro" }}</title>
                <link href="{{ asset("' . config('onixpro.blade_file_css_reference') . '") }}" rel="stylesheet">
                @stack("css")
                <style>
                ' . $content['gjs-css'] . '
                </style>
            </head>

            <body>
                    ' . $content['gjs-html'] . '

                <script src="{{ asset("' . config('onixpro.blade_file_javascript_reference') . '") }}"></script>
                <script>
                    const Toast = Swal.mixin({
                        toast            : true,
                        position         : "top",
                        showConfirmButton: false,
                        timer            : 3000,
                        timerProgressBar : true,
                        didOpen          : (toast) => {
                            toast.addEventListener("mouseenter", Swal.stopTimer)
                            toast.addEventListener("mouseleave", Swal.resumeTimer)
                        }
                        });
                </script>
                @stack("js")
            </body>

            </html>
        ';

        // Format the html
        $Tidy         = new Tidy($bladeFileData);
        $htmlFormated = $Tidy->HTML($bladeFileData);

        return $htmlFormated;
    }

    /**
     * This Fuction will be used to replace some breaking worlds
     *
     * @param mixed $html
     *
     * @return [type]
     */
    public static function replaceBreakingWorlds($html)
    {
        // Replace comments that make a eeor in the file
        $html['gjs-html'] = str_replace('-->', "--> ", $html['gjs-html']);

        // Replace where you have the script so we can push to the right place
        $html['gjs-html'] = str_replace('<script>', "@push('js')
        <script> ", $html['gjs-html']);
        $html['gjs-html'] = str_replace('</script>', " </script>
        @endpush ", $html['gjs-html']);

        return $html;
    }
}
