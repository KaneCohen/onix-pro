<x-onix::onix.main
    saveUrl="{{ route('pages.html.save', $page->id) }}"
    loadUrl="{{ route('pages.html.load', $page->id) }}"
    autoLoadingUrl="{{ route('onixpro.autoload.block') }}"
    onix_app_js="{{ asset('vendor/Onixpro/js/app.js') }}"
    cssPath="{{ asset('vendor/Onixpro/css/app.css') }}"
    javascriptPath="{{ asset('vendor/Onixpro/js/app.js') }}"
/>
