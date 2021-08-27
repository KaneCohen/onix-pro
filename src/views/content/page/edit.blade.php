<x-onixpro::layout.main>


    <div class="grid grid-cols-1 gap-6">
        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body">
                <x-onixpro::form.form action="{{ route('blocks.update', $block->id) }}">
                    <div class="px-5 py-7">
                        <x-onixpro::form.text name="label" label="label" value="{{ $block->label }}" />
                        <x-onixpro::form.text name="category" label="category" value="{{ $block->category }}" />
                    </div>
                    <div class="modal-action p-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </x-onixpro::form.form>
                <div class="w-full bg-white">
                    @includeIf($block->blade())
                </div>
                <div class="modal-action p-10">
                    <a href="{{ route('blocks.edit.onix', $block->id) }}" target="_blank" class="btn btn-primary">Edit
                        with Grapejs</a>
                </div>
            </div>
        </div>
    </div>
</x-onixpro::layout.main>
