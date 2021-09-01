@php
    use Mariojgt\Onixpro\Models\OnixKey;
    use Mariojgt\Onixpro\Helpers\OnixProApi;
    $key = OnixKey::first();

    $managerApi = new OnixProApi();
    $requestApi = $managerApi->getKeyInformation();

@endphp

<x-onixpro::layout.main>

    @if ($requestApi->json()['data']['is_valid'] == 1)
        <store-components onixkey="{{ $key->key }}" > </store-components>
    @else
        <div class="badge badge-primary">Token Invalid or not setup.</div>
    @endif
</x-onixpro::layout.main>
