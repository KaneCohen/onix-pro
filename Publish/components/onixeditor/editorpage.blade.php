{{-- THIS COMPONENT IS USED TO EDIT THE BLOCKS WHEN USING GRAPEJS
YOU MAY CHANGE YOUR CSS ,JAVASRIPT, SAVE AND LOAD PAGES --}}

{{-- saveUrl // WHERE YOU WANT TO SAVE THE PAGE
loadUrl // HOW YOU WANT TO LOAD THE PAGE
autoLoadingUrl // WHERE YOU AUTOLOAD YOU BLOCKS
onix_app_js // ALL GRAPE JS CONFIGURATIONS IF NOT SURE LEAVE AS DEFAULT

// YOUR CSS AND JAVASCRIPT FOR YOUR PAGES.
cssPath
javascriptPath
NOTE THAT BOTH CSS AND JAVASCRIPT WILL NOT BE CARRIED CROSS ONCE SAVE THE PAGE IF YOU WANT TO RENDER THE PAGE
YOU NEED TO INCLUDE THE SOURCE CSS AND JS, BUY DEFAULT ONIX PRO ONCE YOU CREATE A PAGE IT SAVE INCLUDE YOU CSS AND JAVASCRIPT REFERENCE YOU THE PAGE RENDER
--}}
<x-onix::onix.main
    saveUrl="{{ route('pages.html.save', $page->id) }}"
    loadUrl="{{ route('pages.html.load', $page->id) }}"
    autoLoadingUrl="{{ route('onixpro.autoload.block') }}"
    onix_app_js="{{ asset('vendor/Onixpro/js/app.js') }}"

    cssPath="{{ asset(config('onixpro.blade_file_css_reference')) }}"
    javascriptPath="{{ asset(config('onixpro.blade_file_javascript_reference')) }}"
/>
