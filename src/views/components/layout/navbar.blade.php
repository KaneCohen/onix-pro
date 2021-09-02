<div class="navbar mb-2 shadow-lg bg-neutral text-neutral-content rounded-box">
    <div class="px-2 mx-2 navbar-start">
        <span class="text-lg font-bold">
            <a href="{{ route('onixpro') }}"> OnixPro </a>
        </span>
    </div>
    <div class="hidden px-2 mx-2 navbar-center lg:flex">
        <div class="flex items-stretch">
            <a class="btn btn-ghost btn-sm rounded-btn" href="{{ route('pages') }}">
                Pages
            </a>
            <a class="btn btn-ghost btn-sm rounded-btn" href="{{ route('blocks') }}">
                Blocks
            </a>
        </div>
    </div>
    <div class="navbar-end">
        {{-- <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="inline-block w-6 h-6 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                </path>
            </svg>
        </button> --}}
        <div class="dropdown dropdown-left">
            <div tabindex="0" class="m-1 btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
            <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                <li>
                    <a href="{{ route('onixpro.store.pages') }}">
                        Onix Store pages
                    </a>
                </li>
                <li>
                    <a href="{{ route('onixpro.store.components') }}">
                        Onix Store components
                    </a>
                </li>
            </ul>
        </div>
        <div class="dropdown dropdown-left">
            <div tabindex="0" class="m-1 btn">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="inline-block w-6 h-6 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <div tabindex="0" class="w-96 p-2 shadow card dropdown-content bg-neutral">
                <x-onixpro::form.form action="{{ route('onixserver.search') }}">
                    <div class="px-5">
                        <x-onixpro::form.text name="search" label="search" />
                    </div>
                    <div class="modal-action">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </x-onixpro::form.form>
            </div>
        </div>
    </div>
</div>
