<x-onixpro::layout.main>

    @php
        use Mariojgt\Onixpro\Models\OnixKey;
        use Mariojgt\Onixpro\Helpers\OnixProApi;
        $key = OnixKey::first();

        $managerApi = new OnixProApi();
        $requestApi = $managerApi->getKeyInformation();

    @endphp

    <x-onixpro::key.validate />

    <div class="container mx-auto px-6 p-6 bg-base-200 w-full">
        <div class="mb-16 text-center">
            <h2 class="text-base font-semibold tracking-wide uppercase">
                Features.
            </h2>
            <p class="mt-2 leading-8 font-extrabold tracking-tight text-base sm:text-4xl">
                Onix Pro Plans.
            </p>
            <p class="mt-2 leading-8 font-extrabold tracking-tight text-base sm:text-4xl">
                Note that onix pro use <a href="https://tailwindcss.com/">Tailwind css</a> a powerful
                utility classes css framework.
            </p>
        </div>

        <div class="flex flex-wrap my-12 dark:text-white">
            <div class="w-full border-b p-8">

                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div
                        class="pricing-box max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                        <div class="bg-base-300 px-6 py-8 lg:flex-shrink-1 lg:p-12">
                            <h3 class="leading-8 font-extrabold text-base sm:text-3xl sm:leading-9 dark:text-white">
                                Free
                            </h3>
                            <p class="mt-6 leading-6 text-base">
                                Unlock a powerful and quick way to create landing pages, contact forms and more.
                            </p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4
                                        class="flex-shrink-0 pr-4 bg-base-300 dtext-sm leading-5 tracking-wider font-semibold uppercase text-base">
                                        What&#x27;s included
                                    </h4>
                                    <div class="flex-1 border-t-2 border-gray-200">
                                    </div>
                                </div>
                                <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Download up to 15 per month components from the onix store.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Download up to 15 per month pages from the onix store.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            All Onix pro editor features.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Free updates.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Upload up to 5 of your creations to the offical onix pro store.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="py-8 px-6 text-center bg-gray-50 dark:bg-gray-700 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                            <p class="text-lg leading-6 font-bold text-gray-900 dark:text-white">
                                Free
                            </p>
                            <div
                                class="mt-4 flex items-center justify-center text-5xl leading-none font-extrabold text-gray-900 dark:text-white">
                                <span>
                                    Free Forever
                                </span>
                            </div>
                            {{-- <p class="mt-4 text-sm leading-5">
                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                    Card payments:
                                </span>
                                <span class=" inline-block font-medium text-gray-500 dark:text-gray-400">
                                    2.9% + 20p per transaction
                                </span>
                            </p> --}}
                            <div class="mt-6">
                                <div class="rounded-md shadow">
                                    <a href="https://onixpro.net/register" target="_blank"
                                        class="py-2 px-4 bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                        Get your free key here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- free end --}}

        {{-- paid start --}}
        <div class="flex flex-wrap my-12 dark:text-white">
            <div class="w-full border-b p-8">

                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div
                        class="pricing-box max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
                        <div class="bg-base-300 px-6 py-8 lg:flex-shrink-1 lg:p-12">
                            <h3 class="leading-8 font-extrabold text-base sm:text-3xl sm:leading-9 dark:text-white">
                                Paid
                            </h3>
                            <p class="mt-6 leading-6 text-base">
                                Unlock some amazing features to help you quick create amazing page, and suport the onix
                                pro development.
                            </p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4
                                        class="flex-shrink-0 pr-4 bg-base-300 dtext-sm leading-5 tracking-wider font-semibold uppercase text-base">
                                        What&#x27;s included
                                    </h4>
                                    <div class="flex-1 border-t-2 border-gray-200">
                                    </div>
                                </div>
                                <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Unlimited components download from the onix store.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Unlimited pages download from the onix store.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            component and pages reviews.
                                        </p>
                                    </li>
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6"
                                                height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                                <path
                                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                                </path>
                                            </svg>
                                        </div>
                                        <p class="ml-3 leading-5 text-base">
                                            Upload Unlimited components and pages to the offical onix pro store.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="py-8 px-6 text-center bg-gray-50 dark:bg-gray-700 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                            <p class="text-lg leading-6 font-bold text-gray-900 dark:text-white">
                                Paid
                            </p>
                            <div
                                class="mt-4 flex items-center justify-center text-5xl leading-none font-extrabold text-gray-900 dark:text-white">
                                <span>
                                    $2/mo
                                </span>
                            </div>


                            {{-- <p class="mt-4 text-sm leading-5">
                                <span class="block font-medium text-gray-500 dark:text-gray-400">
                                    Card payments:
                                </span>
                                <span class=" inline-block font-medium text-gray-500 dark:text-gray-400">
                                    2.9% + 20p per transaction
                                </span>
                            </p> --}}
                            <div class="mt-6">
                                <div class="rounded-md shadow">
                                    <a href="https://onixpro.net/register?plan=paid" target="_blank"
                                        class="py-2 px-4  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                        Get your premium key here
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-onixpro::layout.main>
