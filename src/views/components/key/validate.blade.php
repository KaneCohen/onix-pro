@php
    use  Mariojgt\Onixpro\Models\OnixKey;
    $key = OnixKey::first();
@endphp

<div class="card col-span-1 row-span-3 shadow-lg xl:col-span-2 bg-base-300">
    <div class="card-body">
        <h2 class="my-4 text-4xl font-bold card-title">Onix Subscription Status</h2>
        <div class="mb-4 space-x-2 card-actions">
            <div class="badge badge-primary">Free</div>
        </div>

        <x-onixpro::form.form action="{{ route('pages.store') }}">
            <div class="px-5 py-7">
                <x-onixpro::form.text name="onix_key" value="{{ $key->key ?? '' }}" label="Onix Subscrption Key" />
            </div>
            <div class="modal-action">
                <button type="submit" class="btn btn-primary">Validate key</button>
            </div>
        </x-onixpro::form.form>
    </div>
</div>