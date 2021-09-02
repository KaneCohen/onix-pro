<x-onixpro::layout.main>

    <div class="card col-span-1 row-span-3 shadow-lg xl:col-span-2 bg-base-100">
        <div class="card-body">
            <h2 class="my-4 text-4xl font-bold card-title">Pages</h2>
            <div class="overflow-x-auto">
                <table class="table w-full table-zebra">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($onixpage as $item)
                        <tr>
                            <th>{{ $item->title }}</th>
                            <th>
                                <div class="p-20 bg-cover card bg-base-200">
                                    @php
                                    $itemHtml = (array)json_decode($item->content);
                                    @endphp
                                    <isolator htmlitem="{{ $itemHtml['gjs-html'] }}"> </isolator>
                                </div>
                            </th>
                            <th>
                                <a class="btn btn-primary" href="{{ route('pages.edit', $item->id) }}">Edit</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card col-span-1 row-span-3 shadow-lg xl:col-span-2 bg-base-100">
        <div class="card-body">
            <h2 class="my-4 text-4xl font-bold card-title">Blocks</h2>
            <div class="overflow-x-auto">
                <table class="table w-full table-zebra">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($onixBlock as $item)
                        <tr>
                            <th>{{ $item->label }}</th>
                            <th>
                                <div class="p-20 bg-cover card bg-base-200">
                                    @php
                                    $itemHtml = (array)json_decode($item->content);
                                    @endphp
                                    <isolator htmlitem="{{ $itemHtml['gjs-html'] }}"> </isolator>
                                </div>
                            </th>
                            <td>
                                <a class="btn btn-primary" href="{{ route('blocks.edit', $item->id) }}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-onixpro::layout.main>
