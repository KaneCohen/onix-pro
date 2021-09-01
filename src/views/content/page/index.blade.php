<x-onixpro::layout.main>

    <div class="grid grid-cols-3 w-full p-2.5">
        <div>
            <label for="my-modal-2" class="btn btn-primary modal-button">new</label>
            <input type="checkbox" id="my-modal-2" class="modal-toggle">
            <div class="modal">
                <div class="modal-box">
                    <x-onixpro::form.form action="{{ route('pages.store') }}">
                        <div class="px-5 py-7">
                            <x-onixpro::form.text name="title" label="title" />
                            <x-onixpro::form.text name="page_title" label="page_title" />
                            <x-onixpro::form.text name="slug" label="slug" placeholder="this-page-name" />
                            <x-onixpro::form.text name="meta_description" label="meta_description" />
                        </div>
                        <div class="modal-action">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <label for="my-modal-2" class="btn">Close</label>
                        </div>
                    </x-onixpro::form.form>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6">

        @foreach ($pages as $item)
        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body">
                <h2 class="card-title">{{ $item->title }}
                    <div class="badge mx-2 badge-secondary"><a href="{{ route('page', $item->slug) }}"
                            target="_blank">{{ $item->slug }}</a></div>
                </h2>
                <div class="w-full">

                    @php
                    $itemHtml = (array)json_decode($item->content);
                    @endphp
                    <isolator htmlitem="{{ $itemHtml['gjs-html'] }}"> </isolator>
                </div>

                <div class="justify-end card-actions">
                    <a class="btn btn-secondary" href="{{ route('pages.edit', $item->id) }}">Edit</a>
                    {{-- Delete confirm --}}
                    <label for="my-modal-delete" class="btn btn-warning modal-button">Delete</label>
                    <input type="checkbox" id="my-modal-delete" class="modal-toggle">
                    <div class="modal">
                        <div class="modal-box">
                            <p>
                                Are you sure you want to delete ?
                            </p>
                            <div class="modal-action">
                                <a href="{{ route('pages.delete', encrypt($item->id)) }}" for="my-modal-delete"
                                    class="btn btn-warning">Yes</a>
                                <label for="my-modal-delete" class="btn">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="grid grid-cols-3 w-full p-2.5">
        {{ $pages->links() }}
        {{-- <div class="btn-group">
            <button class="btn">Previous</button>
            <button class="btn">1</button>
            <button class="btn btn-active">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
            <button class="btn">Next</button>
        </div> --}}
    </div>

</x-onixpro::layout.main>
