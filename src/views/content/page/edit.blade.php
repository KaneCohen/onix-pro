<x-onixpro::layout.main>


    <div class="grid grid-cols-1 gap-6">
        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body">
                <x-onixpro::form.form action="{{ route('pages.update', $page->id) }}">
                    <div class="px-5 py-7">
                        <x-onixpro::form.text name="title" label="title" value="{{ $page->title }}" />
                        <x-onixpro::form.text name="slug" label="slug" value="{{ $page->slug }}" />
                        <x-onixpro::form.text name="page_title" label="page_title" value="{{ $page->page_title }}" />
                        <x-onixpro::form.text name="meta_description" label="meta_description"
                            value="{{ $page->meta_description }}" />
                    </div>
                    <div class="modal-action p-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="{{ route('page', $page->slug) }}" target="_blank">View page</a>
                    </div>
                </x-onixpro::form.form>
                <div class="w-full bg-white">
                    @includeIf($page->blade())
                </div>
                <div class="modal-action p-10">
                    <a href="{{ route('pages.edit.onix', $page->id) }}" target="_blank" class="btn btn-primary">Edit
                        with Grapejs</a>
                </div>
            </div>
        </div>
    </div>
</x-onixpro::layout.main>
