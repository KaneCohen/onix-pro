@php
use Mariojgt\Onixpro\Models\OnixKey;
use Mariojgt\Onixpro\Helpers\OnixProApi;
$key = OnixKey::first();

$managerApi = new OnixProApi();
$requestApi = $managerApi->getKeyInformation();

@endphp

<x-onixpro::layout.main>

    @if (!empty($requestApi->json()['data']['is_valid']) && $requestApi->json()['data']['is_valid'] == 1)
    <store-components onixkey="{{ $key->key }}"> </store-components>
    @else
    <div class="hero min-h-screen bg-base-200">
        <div class="text-center hero-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">
                    Error
                </h1>
                <p class="mb-5">
                    Onix Key Invalid or not setup.
                </p>
                <a href="https://onixpro.net/" target="_blank" class="btn btn-primary">Get your key here is free</a>
            </div>
        </div>
    </div>
    @endif
</x-onixpro::layout.main>
