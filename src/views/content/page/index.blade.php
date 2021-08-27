<x-onixpro::layout.main>

    <div class="grid grid-cols-3 w-full p-2.5">
        <div>
            <label for="my-modal-2" class="btn btn-primary modal-button">new</label>
            <input type="checkbox" id="my-modal-2" class="modal-toggle">
            <div class="modal">
                <div class="modal-box">
                    <x-onixpro::form.form action="{{ route('blocks.store') }}">
                        <div class="px-5 py-7">
                            <x-onixpro::form.text name="label" label="label" />
                            <x-onixpro::form.text name="category" label="category" />
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
                <h2 class="card-title">{{ $item->label }}
                    <div class="badge mx-2 badge-secondary">{{ $item->category }}</div>
                </h2>
                <div class="w-full">
                    @includeIf($item->blade())
                </div>

                <div class="justify-end card-actions">
                    <a class="btn btn-secondary" href="{{ route('blocks.edit', $item->id) }}">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="grid grid-cols-3 w-full p-2.5">
        {{ $pages->links() }}
        <div class="btn-group">
            <button class="btn">Previous</button>
            <button class="btn">1</button>
            <button class="btn btn-active">2</button>
            <button class="btn">3</button>
            <button class="btn">4</button>
            <button class="btn">Next</button>
        </div>
    </div>

</x-onixpro::layout.main>
