<x-onix::onix.main
    saveUrl="{{ route('blocks.html.save', $block->id) }}"
    loadUrl="{{ route('blocks.html.load', $block->id) }}"
    autoLoadingUrl="{{ route('onixpro.autoload.block') }}"
    onix_app_js="{{ asset('vendor/Onixpro/js/app.js') }}"
    cssPath="{{ asset('vendor/Onixpro/css/app.css') }}"
/>
