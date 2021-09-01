@php
use Mariojgt\Onixpro\Models\OnixKey;
use Mariojgt\Onixpro\Helpers\OnixProApi;
$key = OnixKey::first();

$managerApi = new OnixProApi();
$requestApi = $managerApi->getKeyInformation();

@endphp

<div class="card col-span-1 row-span-3 shadow-lg xl:col-span-2 bg-base-300">
    <div class="card-body">
        <h2 class="my-4 text-4xl font-bold card-title">Onix Subscription Status
            @if ($requestApi->json()['data']['is_valid'] == 1)
            <div class="badge badge-primary">Token Valid</div>
            @else
            <div class="badge badge-primary">Token Invalid or not setup</div>
            @endif
        </h2>

        <div class="mb-4 space-x-2 card-actions">

            @if ($requestApi->json()['data']['is_valid'] == 1)

                @if ($requestApi->json()['data']['plan'] == 2)
                    <div class="badge badge-secondary">Premium</div>
                @else
                    <div class="badge badge-primary">Free</div>
                @endif

            @else
                <div class="badge badge-primary">Token Invalid or not setup.</div>
            @endif
        </div>

        <x-onixpro::form.form action="{{ route('onixpro.key.validate') }}">
            <div class="px-5 py-7">
                <x-onixpro::form.text name="onix_key" value="{{ $key->key ?? '' }}" label="Onix Subscrption Key" />
            </div>
            <div class="modal-action">
                <button type="submit" class="btn btn-primary">Validate key</button>
                <a href="https://onixpro.net/home_dashboard" class="btn btn-primary">Home profile</a>
            </div>
        </x-onixpro::form.form>

    </div>
</div>
