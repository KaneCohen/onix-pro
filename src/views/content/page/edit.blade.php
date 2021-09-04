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

                        @if ($page->standalone == 1)
                        <x-onixpro::form.switch name="standalone" label="Is Active" checked="true"
                            value="{{ $page->standalone }}" />
                        @else
                        <div class="p-2">
                            <div
                                class="inline-flex items-center bg-white leading-none text-pink-600 rounded-full p-2 shadow text-teal text-sm w-full">
                                <span
                                    class="inline-flex bg-pink-600 text-white rounded-full h-6 px-3 justify-center items-center">Standalone</span>
                                <span class="inline-flex px-2">If set as true a fully page will be generated with css and
                                    javascript, and the seo fields.</span>
                            </div>
                        </div>
                        <x-onixpro::form.switch name="standalone" label="Standalone Page" value="1" />
                        @endif
                    </div>


                    <div class="modal-action p-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-secondary" href="{{ route('page', $page->slug) }}" target="_blank">View
                            page</a>
                    </div>
                </x-onixpro::form.form>

                <button class="btn">
                    Page Location
                    <div class="badge ml-2">{{ $page->filepath }}</div>
                </button>

                <div class="w-full bg-white">
                    @php
                    $itemHtml = (array)json_decode($page->content);
                    @endphp
                    <isolator htmlitem="{{ $itemHtml['gjs-html'] }}"> </isolator>
                </div>
                <div class="modal-action p-10">
                    <a href="{{ route('pages.edit.onix', $page->id) }}" target="_blank" class="btn btn-primary">Edit
                        with Grapejs</a>
                </div>
            </div>
        </div>
    </div>
</x-onixpro::layout.main>
