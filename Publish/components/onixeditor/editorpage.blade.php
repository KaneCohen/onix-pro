<x-onix::onix.main
    saveUrl="{{ route('pages.html.save', $page->id) }}"
    loadUrl="{{ route('pages.html.load', $page->id) }}"
    autoLoadingUrl="{{ route('onixpro.autoload.block') }}"
/>
