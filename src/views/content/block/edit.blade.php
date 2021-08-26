<x-onixpro::layout.main>


    <div class="grid grid-cols-1 gap-6">
        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body">
                <x-onixpro::form.form action="{{ route('blocks.store') }}">
                    <div class="px-5 py-7">
                        <x-onixpro::form.text name="label" label="label" />
                        <x-onixpro::form.text name="category" label="category" />
                    </div>
                    <div class="modal-action p-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </x-onixpro::form.form>
                <div class="flex flex-row w-full">
                    <div class="grid flex-grow h-32 card bg-base-300 rounded-box place-items-center">
                        html here
                    </div>
                </div>
                <div class="modal-action p-10">
                    <button type="submit" class="btn btn-primary">Edit Html</button>
                </div>


            </div>
        </div>
    </div>

</x-onixpro::layout.main>
