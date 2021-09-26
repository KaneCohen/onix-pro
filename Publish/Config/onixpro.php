<?php

return [
    // Middleehere
    'onixpro_middleware' => ['web'],

    // Page View Url
    // Disable the page view, you may want to disable the page view case interfere with your own routes
    'disable_page_view' => false,

    // THOSE VALUES ARE USED WHEN YOU CREATE A STANDALONE PAGE SO YOU CAN PASS YOU CSS AND JAVASCRIPT
    // NOTE: DON'T USE FOR EXAMPLE (asset("vendor/Onixpro/js/app.js")) ONIX PRO BY DEFAULT WILL
    // INJECT YOU REFERENCE INSIDE asset example asset('{{ config('onixpro.blade_file_css_reference') }}')
    'blade_file_css_reference'        => "vendor/Onixpro/css/app.css", // your page css
    'blade_file_javascript_reference' => "vendor/Onixpro/js/app.js", // your page javascript
];
