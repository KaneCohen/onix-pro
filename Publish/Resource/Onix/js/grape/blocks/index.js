// Example how you can load you blocks
export default (editor, config) => {
    const bm = editor.BlockManager;
    //const toAdd = name => config.blocks.indexOf(name) >= 0;

    bm.add("starter-kit-1-onix").set({
        label: "starter-kit-1-onix",
        category: "onix-standard",
        attributes: { class: "fa fa-cubes" },
        content: `
        <div>
        <header class="bg-gray-800" x-data="{ isOpen: false }">
            <nav class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-white transition-colors duration-300 transform md:text-2xl hover:text-indigo-400"
                        href="#">Brand</a>

                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button" class="text-gray-200 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                            aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div :class="isOpen ? 'flex' : 'hidden'"
                    class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400"
                        href="#">Home</a>
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400"
                        href="#">Templates</a>
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400"
                        href="#">Price</a>
                    <a class="text-sm font-medium text-gray-200 transition-colors duration-300 transform hover:text-indigo-400"
                        href="#">Help</a>
                    <a class="px-4 py-1 text-sm font-medium text-center text-gray-200 transition-colors duration-300 transform border rounded hover:bg-indigo-400"
                        href="#">Get In Touch</a>
                </div>
            </nav>

            <section class="flex items-center justify-center" style="height: 500px;">
                <div class="text-center">
                    <p class="text-xl font-medium tracking-wider text-gray-300">Lorem ipsum dolor</p>
                    <h2 class="mt-6 text-3xl font-bold text-white md:text-5xl">Lorem ipsum dolor sit amet, <br> consectetur
                        adipiscing elit</h2>

                    <div class="flex justify-center mt-8">
                        <a class="px-8 py-2 text-lg font-medium text-white transition-colors duration-300 transform bg-indigo-600 rounded hover:bg-indigo-500"
                            href="#">Get In Touch</a>
                    </div>
                </div>
            </section>
        </header>


        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur</h3>
                        <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="block mt-8 text-indigo-700 underline">Experienced team</a>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="https://images.unsplash.com/photo-1618346136472-090de27fe8b4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=673&q=80">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="items-center md:flex md:space-x-6">
                    <div class="md:w-1/2">
                        <div class="flex items-center justify-center">
                            <div class="max-w-md">
                                <img class="object-cover object-center w-full rounded-md shadow" style="height: 500px;"
                                    src="https://images.unsplash.com/photo-1616874535244-73aea5daadb9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-0 md:w-1/2">
                        <h3 class="text-2xl font-semibold text-gray-800">Lorem ipsum dolor sit <br> amet, consectetur</h3>
                        <p class="max-w-md mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                        <a href="#" class="block mt-8 text-indigo-700 underline">Experienced team</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</h2>
                <p class="max-w-lg mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>
                <div class="grid gap-8 mt-10 md:mt-20 md:grid-cols-2">
                    <div class="flex space-x-4">
                        <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M47.6268 23.7062C48.2466 24.4484 48.2466 25.5277 47.6268 26.2699L44.4812 30.0372C43.803 30.8493 43.4742 31.8971 43.5669 32.9512L44.0044 37.9287C44.0912 38.9165 43.4411 39.8188 42.4765 40.0491L38.0619 41.1031C36.9808 41.3612 36.0559 42.0575 35.5089 43.025L33.2053 47.099C32.6961 47.9995 31.5844 48.3631 30.6415 47.9375L26.6498 46.1358C25.6003 45.6621 24.3976 45.6636 23.3493 46.14L19.3597 47.9531C18.4161 48.3819 17.3014 48.0189 16.7912 47.1168L14.4911 43.0489C13.9441 42.0814 13.0192 41.3851 11.9381 41.127L7.52286 40.0728C6.55849 39.8426 5.90838 38.9406 5.99496 37.9529L6.43346 32.9505C6.52583 31.8968 6.19706 30.8494 5.5191 30.0375L2.37029 26.2665C1.75138 25.5253 1.75043 24.4477 2.36803 23.7054L5.52362 19.9127C6.1988 19.1012 6.52582 18.0557 6.43339 17.0041L5.99624 12.0308C5.90922 11.0408 6.56225 10.1372 7.52946 9.90904L11.9298 8.87123C13.0153 8.61522 13.9446 7.91765 14.4935 6.94684L16.7947 2.87709C17.3039 1.97664 18.4156 1.61302 19.3585 2.03858L23.3544 3.8422C24.4007 4.31444 25.5993 4.31444 26.6456 3.8422L30.6415 2.03858C31.5844 1.61301 32.6961 1.97663 33.2053 2.87709L35.5089 6.95112C36.0559 7.9186 36.9808 8.61486 38.0619 8.87297L42.4765 9.92701C43.4411 10.1573 44.0912 11.0596 44.0044 12.0474L43.5669 17.0249C43.4742 18.079 43.803 19.1268 44.4812 19.939L47.6268 23.7062ZM25 37.9326C26.8075 37.9326 28.2727 36.4674 28.2727 34.6599V34.4275C28.2727 32.6201 26.8075 31.1548 25 31.1548C23.1925 31.1548 21.7273 32.6201 21.7273 34.4275V34.6599C21.7273 36.4674 23.1925 37.9326 25 37.9326ZM25 28.377C26.8075 28.377 28.2727 26.9117 28.2727 25.1042V15.3162C28.2727 13.5087 26.8075 12.0435 25 12.0435C23.1925 12.0435 21.7273 13.5087 21.7273 15.3162V25.1042C21.7273 26.9117 23.1925 28.377 25 28.377Z"
                                stroke="currentColor" stroke-width="2" />
                        </svg>

                        <div>
                            <h4 class="text-xl font-medium text-gray-800">Design concept</h4>
                            <p class="max-w-lg mt-4 text-gray-600">Vitae nulla nunc euismod vel nunc euismod velpretium tellus
                                accumsan nulla nunc euismod ve semper.</p>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <svg class="w-6 h-6 text-gray-500" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1 25C1 11.8023 11.8023 1 25 1C38.1977 1 49 11.8023 49 25C49 38.1977 38.1977 49 25 49C11.8023 49 1 38.1977 1 25ZM33.36 35.3573C34.7228 36.1959 36.5074 35.771 37.346 34.4082C38.1913 33.0346 37.7522 31.2351 36.3692 30.4053L28.221 25.5164C27.6186 25.155 27.25 24.504 27.25 23.8014V14.375C27.25 12.7872 25.9628 11.5 24.375 11.5C22.7872 11.5 21.5 12.7872 21.5 14.375V25.8236C21.5 27.2127 22.2206 28.5023 23.4036 29.2302L33.36 35.3573Z"
                                stroke="currentColor" stroke-width="2" />
                        </svg>

                        <div>
                            <h4 class="text-xl font-medium text-gray-800">Developing websites</h4>
                            <p class="max-w-lg mt-4 text-gray-600">Vitae nulla euismod velpretium tellus accumsan nulla nunc
                                euismod ve semper. Vitae nulla euismod velpretium tellus
                                accumsan nulla nunc euismod ve semper. Vitae nulla euismod velpretium tellus accumsan nulla nunc
                                euismod ve semper.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="px-8 py-12 bg-gray-800 rounded-md md:px-20 md:flex md:items-center md:justify-between">
                    <div>
                        <h3 class="text-2xl font-semibold text-white">Lorem ipsum dolor sit amet</h3>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                            volutpat, viverra magna risus aliquam massa.</p>
                    </div>

                    <a class="block px-8 py-2 mt-6 text-lg font-medium text-center text-white transition-colors duration-300 transform bg-indigo-600 rounded md:mt-0 hover:bg-indigo-500"
                        href="#">Get In Touch</a>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto">
                <div class="md:flex md:justify-between">
                    <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, consectetur <br> adipiscing
                        elit, sed do eiusmod</h2>
                    <a href="#" class="block mt-6 text-indigo-700 underline md:mt-0">Experienced team</a>
                </div>

                <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                            volutpat, viverra magna risus aliquam massa.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                            volutpat,
                            viverra magna risus aliquam massa.</p>
                    </div>

                    <div class="px-6 py-8 overflow-hidden bg-white rounded-md shadow-md">
                        <h2 class="text-xl font-medium text-gray-800">Audio</h2>
                        <p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac aliquam ac
                            volutpat,
                            viverra magna risus aliquam massa.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Lorem ipsum dolor sit amet, <br> consectetur adipiscing</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <img class="object-cover object-center w-full mt-16 rounded-md shadow h-80"
                    src="https://images.unsplash.com/photo-1600069226367-412873fb0637?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto space-y-8 md:flex md:items-center md:space-y-0">
                <div class="md:w-2/3">
                    <div class="hidden md:flex md:items-center md:space-x-10">
                        <img class="object-cover object-center rounded-md shadow w-72 h-72"
                            src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <img class="object-cover object-center w-64 rounded-md shadow h-96"
                            src="https://images.unsplash.com/photo-1618506469810-282bef2b30b3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">
                    </div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:mt-6">Lorem ipsum dolor </h2>
                    <p class="max-w-lg mt-4 text-gray-600">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse illum
                        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia
                        deserunt mollit anim id est laborum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="md:w-1/3">
                    <img class="object-cover object-center w-full rounded-md shadow" style="height: 700px;"
                        src="https://images.unsplash.com/photo-1593352216840-1aee13f45818?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                </div>
            </div>
        </section>

        <section class="bg-white">
            <div class="max-w-5xl px-6 py-16 mx-auto text-center">
                <h2 class="text-3xl font-semibold text-gray-800">Our Leadership</h2>
                <p class="max-w-lg mx-auto mt-4 text-gray-600">Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <div class="grid gap-8 mt-6 md:grid-cols-2 lg:grid-cols-4">
                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>

                    <div>
                        <img class="object-cover object-center w-full h-64 rounded-md shadow"
                            src="https://images.unsplash.com/photo-1614030126544-b79b92e29e98?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80">
                        <h3 class="mt-2 font-medium text-gray-700">John Doe</h3>
                        <p class="text-sm text-gray-600">CEO</p>
                    </div>
                </div>
            </div>
        </section>

        <footer class="border-t">
            <div class="container flex items-center justify-between px-6 py-8 mx-auto">
                <p class="text-gray-500">© 2019-2021 All Rights Reserved.</p>
                <p class="font-medium text-gray-700">Terms of Service</p>
            </div>
        </footer>
    </div>
    `,
    });

    bm.add("starter-kit-2-onix").set({
        label: "starter-kit-2-onix",
        category: "onix-standard",
        attributes: { class: "fa fa-cubes" },
        content: `
        <div class="overflow-x-hidden bg-gray-100">
        <nav class="px-6 py-4 bg-white shadow">
            <div class="container flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
                <div class="flex items-center justify-between">
                    <div>
                        <a href="#" class="text-xl font-bold text-gray-800 md:text-2xl">Brand</a>
                    </div>
                    <div>
                        <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex-col hidden md:flex md:flex-row md:-mx-4">
                    <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Home</a>
                    <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Blog</a>
                    <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">About us</a>
                </div>
            </div>
        </nav>

        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
                        <div>
                            <select class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option>Latest</option>
                                <option>Last Week</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between"><span class="font-light text-gray-600">Jun 1,
                                    2020</span><a href="#"
                                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Build
                                    Your New Idea with Laravel Freamwork.</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="#"
                                    class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline">Alex John</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between"><span class="font-light text-gray-600">mar 4,
                                    2019</span><a href="#"
                                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Design</a>
                            </div>
                            <div class="mt-2"><a href="#"
                                    class="text-2xl font-bold text-gray-700 hover:underline">Accessibility tools for
                                    designers and developers</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="#"
                                    class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline">Jane Doe</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between"><span class="font-light text-gray-600">Feb 14,
                                    2019</span><a href="#"
                                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">PHP</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">PHP:
                                    Array to Map</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="#"
                                    class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline">Lisa Way</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between"><span class="font-light text-gray-600">Dec 23,
                                    2018</span><a href="#"
                                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Django</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">Django
                                    Dashboard - Learn by Coding</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="#"
                                    class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline">Steve Matt</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-between"><span class="font-light text-gray-600">Mar 10,
                                    2018</span><a href="#"
                                    class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Testing</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">TDD
                                    Frist</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="#"
                                    class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                            alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline">Khatab Wedaa</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <div class="flex">
                            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                                previous
                            </a>

                            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                1
                            </a>

                            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                2
                            </a>

                            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                3
                            </a>

                            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hidden w-4/12 -mx-8 lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Alex John</a><span
                                            class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Jane Doe</a><span
                                            class="text-sm font-light text-gray-700">Created 52 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Lisa Way</a><span
                                            class="text-sm font-light text-gray-700">Created 73 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Steve Matt</a><span
                                            class="text-sm font-light text-gray-700">Created 245 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                        alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline">Khatab
                                            Wedaa</a><span class="text-sm font-light text-gray-700">Created 332 Posts</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-8 mt-10">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                        <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <ul>
                                <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        AWS</a></li>
                                <li class="mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        Laravel</a></li>
                                <li class="mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Vue</a>
                                </li>
                                <li class="mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        Design</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        Django</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- PHP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-8 mt-10">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                        <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <div class="flex items-center justify-center"><a href="#"
                                    class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                            </div>
                            <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">Build
                                    Your New Idea with Laravel Freamwork.</a></div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                                        class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span
                                    class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="px-6 py-2 text-gray-100 bg-gray-800">
            <div class="container flex flex-col items-center justify-between mx-auto md:flex-row"><a href="#"
                    class="text-2xl font-bold">Brand</a>
                <p class="mt-2 md:mt-0">All rights reserved 2020.</p>
                <div class="flex mt-4 mb-2 -mx-2 md:mt-0 md:mb-0"><a href="#"
                        class="mx-2 text-gray-100 hover:text-gray-400"><svg viewBox="0 0 512 512"
                            class="w-4 h-4 fill-current">
                        <path
                            d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z">
                        </path>
                    </svg></a><a href="#" class="mx-2 text-gray-100 hover:text-gray-400"><svg viewBox="0 0 512 512"
                        class="w-4 h-4 fill-current">
                        <path
                            d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z">
                        </path>
                    </svg></a><a href="#" class="mx-2 text-gray-100 hover:text-gray-400"><svg viewBox="0 0 512 512"
                        class="w-4 h-4 fill-current">
                        <path
                            d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z">
                        </path>
                    </svg></a>
                </div>
            </div>
        </footer>
    </div>
    `,
    });


    bm.add("starter-uikit-1-onix").set({
        label: "starter-uikit-1-onix",
        category: "onix-standard",
        attributes: { class: "fa fa-cubes" },
        content: `
        <div class="relative min-w-screen min-h-screen flex justify-center items-center absolute bg-gradient-to-tl from-gray-800  to-gray-900 ">
        <div class="flex flex-col w-full">
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-gray-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">Gray50</button>
                <button class="bg-gray-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-200">Gray100</button>
                <button class="bg-gray-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-300">Gray200</button>
                <button class="bg-gray-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-400">Gray300</button>
                <button class="bg-gray-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-100 rounded-full hover:shadow-2xl hover:bg-gray-500">Gray400</button>
                <button class="bg-gray-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-100 rounded-full hover:shadow-2xl hover:bg-gray-600">Gray500</button>
                <button class="bg-gray-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-100 rounded-full hover:shadow-2xl hover:bg-gray-700">Gray600</button>
                <button class="bg-gray-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-100 rounded-full hover:shadow-2xl hover:bg-gray-800">Gray700</button>
                <button class="bg-gray-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-100 rounded-full hover:shadow-2xl hover:bg-gray-900">Gray800</button>
                <button class="bg-gray-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-100 rounded-full hover:shadow-2xl hover:bg-gray-800">Gray900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-red-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-100">Red50</button>
                <button class="bg-red-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-200">Red100</button>
                <button class="bg-red-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-300">Red200</button>
                <button class="bg-red-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-600 rounded-full hover:shadow-2xl hover:bg-red-400">Red300</button>
                <button class="bg-red-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-100 rounded-full hover:shadow-2xl hover:bg-red-500">Red400</button>
                <button class="bg-red-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-100 rounded-full hover:shadow-2xl hover:bg-red-600">Red500</button>
                <button class="bg-red-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-red-100 rounded-full hover:shadow-2xl hover:bg-red-700">Red600</button>
                <button class="bg-red-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-100 rounded-full hover:shadow-2xl hover:bg-red-800">Red700</button>
                <button class="bg-red-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-red-100 rounded-full hover:shadow-2xl hover:bg-red-900">Red800</button>
                <button class="bg-red-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-red-100 rounded-full hover:shadow-2xl hover:bg-red-800">Red900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-yellow-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-100">Yellow50</button>
                <button class="bg-yellow-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-200">Yellow100</button>
                <button class="bg-yellow-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-300">Yellow200</button>
                <button class="bg-yellow-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-600 rounded-full hover:shadow-2xl hover:bg-yellow-400">Yellow300</button>
                <button class="bg-yellow-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-100 rounded-full hover:shadow-2xl hover:bg-yellow-500">Yellow400</button>
                <button class="bg-yellow-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-100 rounded-full hover:shadow-2xl hover:bg-yellow-600">Yellow500</button>
                <button class="bg-yellow-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-100 rounded-full hover:shadow-2xl hover:bg-yellow-700">Yellow600</button>
                <button class="bg-yellow-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-100 rounded-full hover:shadow-2xl hover:bg-yellow-800">Yellow700</button>
                <button class="bg-yellow-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-100 rounded-full hover:shadow-2xl hover:bg-yellow-900">Yellow800</button>
                <button class="bg-yellow-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-yellow-100 rounded-full hover:shadow-2xl hover:bg-yellow-800">Yellow900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-green-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-600 rounded-full hover:shadow-2xl hover:bg-green-100">Green50</button>
                <button class="bg-green-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-600 rounded-full hover:shadow-2xl hover:bg-green-200">Green100</button>
                <button class="bg-green-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-600 rounded-full hover:shadow-2xl hover:bg-green-300">Green200</button>
                <button class="bg-green-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-600 rounded-full hover:shadow-2xl hover:bg-green-400">Green300</button>
                <button class="bg-green-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-100 rounded-full hover:shadow-2xl hover:bg-green-500">Green400</button>
                <button class="bg-green-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-100 rounded-full hover:shadow-2xl hover:bg-green-600">Green500</button>
                <button class="bg-green-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-100 rounded-full hover:shadow-2xl hover:bg-green-700">Green600</button>
                <button class="bg-green-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-100 rounded-full hover:shadow-2xl hover:bg-green-800">Green700</button>
                <button class="bg-green-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-100 rounded-full hover:shadow-2xl hover:bg-green-900">Green800</button>
                <button class="bg-green-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-green-100 rounded-full hover:shadow-2xl hover:bg-green-800">Green900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-blue-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-600 rounded-full hover:shadow-2xl hover:bg-blue-100">Blue50</button>
                <button class="bg-blue-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-600 rounded-full hover:shadow-2xl hover:bg-blue-200">Blue100</button>
                <button class="bg-blue-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-600 rounded-full hover:shadow-2xl hover:bg-blue-300">Blue200</button>
                <button class="bg-blue-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-600 rounded-full hover:shadow-2xl hover:bg-blue-400">Blue300</button>
                <button class="bg-blue-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-500">Blue400</button>
                <button class="bg-blue-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-600">Blue500</button>
                <button class="bg-blue-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-700">Blue600</button>
                <button class="bg-blue-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-800">Blue700</button>
                <button class="bg-blue-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-900">Blue800</button>
                <button class="bg-blue-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-800">Blue900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-indigo-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-600 rounded-full hover:shadow-2xl hover:bg-indigo-100">Indigo50</button>
                <button class="bg-indigo-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-600 rounded-full hover:shadow-2xl hover:bg-indigo-200">Indigo100</button>
                <button class="bg-indigo-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-600 rounded-full hover:shadow-2xl hover:bg-indigo-300">Indigo200</button>
                <button class="bg-indigo-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-600 rounded-full hover:shadow-2xl hover:bg-indigo-400">Indigo300</button>
                <button class="bg-indigo-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-100 rounded-full hover:shadow-2xl hover:bg-indigo-500">Indigo400</button>
                <button class="bg-indigo-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-100 rounded-full hover:shadow-2xl hover:bg-indigo-600">Indigo500</button>
                <button class="bg-indigo-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-100 rounded-full hover:shadow-2xl hover:bg-indigo-700">Indigo600</button>
                <button class="bg-indigo-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-100 rounded-full hover:shadow-2xl hover:bg-indigo-800">Indigo700</button>
                <button class="bg-indigo-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-100 rounded-full hover:shadow-2xl hover:bg-indigo-900">Indigo800</button>
                <button class="bg-indigo-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-indigo-100 rounded-full hover:shadow-2xl hover:bg-indigo-800">Indigo900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-purple-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-600 rounded-full hover:shadow-2xl hover:bg-purple-100">Purple50</button>
                <button class="bg-purple-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-600 rounded-full hover:shadow-2xl hover:bg-purple-200">Purple100</button>
                <button class="bg-purple-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-600 rounded-full hover:shadow-2xl hover:bg-purple-300">Purple200</button>
                <button class="bg-purple-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-purple-600 rounded-full hover:shadow-2xl hover:bg-purple-400">Purple300</button>
                <button class="bg-purple-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-100 rounded-full hover:shadow-2xl hover:bg-purple-500">Purple400</button>
                <button class="bg-purple-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-purple-100 rounded-full hover:shadow-2xl hover:bg-purple-600">Purple500</button>
                <button class="bg-purple-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-100 rounded-full hover:shadow-2xl hover:bg-purple-700">Purple600</button>
                <button class="bg-purple-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-100 rounded-full hover:shadow-2xl hover:bg-purple-800">Purple700</button>
                <button class="bg-purple-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-100 rounded-full hover:shadow-2xl hover:bg-purple-900">Purple800</button>
                <button class="bg-purple-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-purple-100 rounded-full hover:shadow-2xl hover:bg-purple-800">Purple900</button>
            </div>
            <div class="p-1  mt-2 text-center space-x-1 space-y-2">
                <button class="bg-pink-50 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-pink-600 rounded-full hover:shadow-2xl hover:bg-pink-100">Pink50</button>
                <button class="bg-pink-100 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-pink-600 rounded-full hover:shadow-2xl hover:bg-pink-200">Pink100</button>
                <button class="bg-pink-200 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-pink-600 rounded-full hover:shadow-2xl hover:bg-pink-300">Pink200</button>
                <button class="bg-pink-300 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-pink-600 rounded-full hover:shadow-2xl hover:bg-pink-400">Pink300</button>
                <button class="bg-pink-400 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-pink-100 rounded-full hover:shadow-2xl hover:bg-pink-500">Pink400</button>
                <button class="bg-pink-500 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-pink-100 rounded-full hover:shadow-2xl hover:bg-pink-600">Pink500</button>
                <button class="bg-pink-600 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-pink-100 rounded-full hover:shadow-2xl hover:bg-pink-700">Pink600</button>
                <button class="bg-pink-700 px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-pink-100 rounded-full hover:shadow-2xl hover:bg-pink-800">Pink700</button>
                <button class="bg-pink-800 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-pink-100 rounded-full hover:shadow-2xl hover:bg-pink-900">Pink800</button>
                <button class="bg-pink-900 px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-pink-100 rounded-full hover:shadow-2xl hover:bg-pink-800">Pink900</button>
            </div>
        </div>
        </div>
    `,
    });


    bm.add("starter-uikit-2-onix").set({
        label: "starter-uikit-2-onix",
        category: "onix-standard",
        attributes: { class: "fa fa-cubes" },
        content: `
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<div class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8  bg-no-repeat bg-cover relative items-center"
	style="background-image: url(https://images.unsplash.com/photo-1507608158173-1dcec673a2e5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
	<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
	<div
		class="w-full sm:w-6/12 lg:w-4/12 xl:w-4/12  overflow-y-scroll space-y-3 border-8 rounded-3xl bg-white border-gray-800 shadow-2xl z-10">
		<div class="realtive sticky top-0  h-36 w-full rounded-b-3xl bg-center cursor-pointer object-cover z-10 shadow-lg"
			style="background-image:url('https://images.unsplash.com/photo-1622180203374-9524a54b734d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80')">
			<nav class="p-2 flex flex-grow relative justify-between z-10 items-center mx-auto h-18">
				<div class="inline relative">
					<button type="button" class="inline-flex items-center relative text-gray-300 hover:text-white mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16"></path>
                            </svg>
                        </button>
				</div>
				<div class="inline-flex">
					<a href="/">
						<div class="hidden">
							<svg width="102" height="32" fill="currentcolor" style="display: block">
								<path
									d="M29.24 22.68c-.16-.39-.31-.8-.47-1.15l-.74-1.67-.03-.03c-2.2-4.8-4.55-9.68-7.04-14.48l-.1-.2c-.25-.47-.5-.99-.76-1.47-.32-.57-.63-1.18-1.14-1.76a5.3 5.3 0 00-8.2 0c-.47.58-.82 1.19-1.14 1.76-.25.52-.5 1.03-.76 1.5l-.1.2c-2.45 4.8-4.84 9.68-7.04 14.48l-.06.06c-.22.52-.48 1.06-.73 1.64-.16.35-.32.73-.48 1.15a6.8 6.8 0 007.2 9.23 8.38 8.38 0 003.18-1.1c1.3-.73 2.55-1.79 3.95-3.32 1.4 1.53 2.68 2.59 3.95 3.33A8.38 8.38 0 0022.75 32a6.79 6.79 0 006.75-5.83 5.94 5.94 0 00-.26-3.5zm-14.36 1.66c-1.72-2.2-2.84-4.22-3.22-5.95a5.2 5.2 0 01-.1-1.96c.07-.51.26-.96.52-1.34.6-.87 1.65-1.41 2.8-1.41a3.3 3.3 0 012.8 1.4c.26.4.45.84.51 1.35.1.58.06 1.25-.1 1.96-.38 1.7-1.5 3.74-3.21 5.95zm12.74 1.48a4.76 4.76 0 01-2.9 3.75c-.76.32-1.6.41-2.42.32-.8-.1-1.6-.36-2.42-.84a15.64 15.64 0 01-3.63-3.1c2.1-2.6 3.37-4.97 3.85-7.08.23-1 .26-1.9.16-2.73a5.53 5.53 0 00-.86-2.2 5.36 5.36 0 00-4.49-2.28c-1.85 0-3.5.86-4.5 2.27a5.18 5.18 0 00-.85 2.21c-.13.84-.1 1.77.16 2.73.48 2.11 1.78 4.51 3.85 7.1a14.33 14.33 0 01-3.63 3.12c-.83.48-1.62.73-2.42.83a4.76 4.76 0 01-5.32-4.07c-.1-.8-.03-1.6.29-2.5.1-.32.25-.64.41-1.02.22-.52.48-1.06.73-1.6l.04-.07c2.16-4.77 4.52-9.64 6.97-14.41l.1-.2c.25-.48.5-.99.76-1.47.26-.51.54-1 .9-1.4a3.32 3.32 0 015.09 0c.35.4.64.89.9 1.4.25.48.5 1 .76 1.47l.1.2c2.44 4.77 4.8 9.64 7 14.41l.03.03c.26.52.48 1.1.73 1.6.16.39.32.7.42 1.03.19.9.29 1.7.19 2.5zM41.54 24.12a5.02 5.02 0 01-3.95-1.83 6.55 6.55 0 01-1.6-4.48 6.96 6.96 0 011.66-4.58 5.3 5.3 0 014.08-1.86 4.3 4.3 0 013.7 1.92l.1-1.57h2.92V23.8h-2.93l-.1-1.76a4.52 4.52 0 01-3.88 2.08zm.76-2.88c.58 0 1.09-.16 1.57-.45.44-.32.8-.74 1.08-1.25.25-.51.38-1.12.38-1.8a3.42 3.42 0 00-1.47-3.04 2.95 2.95 0 00-3.12 0c-.44.32-.8.74-1.08 1.25a4.01 4.01 0 00-.38 1.8 3.42 3.42 0 001.47 3.04c.47.29.98.45 1.55.45zM53.45 8.46c0 .35-.06.67-.22.93-.16.25-.38.48-.67.64-.29.16-.6.22-.92.22-.32 0-.64-.06-.93-.22a1.84 1.84 0 01-.67-.64 1.82 1.82 0 01-.22-.93c0-.36.07-.68.22-.93.16-.3.39-.48.67-.64.29-.16.6-.23.93-.23a1.84 1.84 0 011.6.86 2 2 0 01.21.94zm-3.4 15.3V11.7h3.18v12.08h-3.19zm11.68-8.9v.04c-.15-.07-.35-.1-.5-.13-.2-.04-.36-.04-.55-.04-.89 0-1.56.26-2 .8-.48.55-.7 1.32-.7 2.31v5.93h-3.19V11.69h2.93l.1 1.83c.32-.64.7-1.12 1.24-1.48a3.1 3.1 0 011.81-.5c.23 0 .45.02.64.06.1.03.16.03.22.06v3.2zm1.28 8.9V6.74h3.18v6.5c.45-.58.96-1.03 1.6-1.38a5.02 5.02 0 016.08 1.31 6.55 6.55 0 011.6 4.49 6.96 6.96 0 01-1.66 4.58 5.3 5.3 0 01-4.08 1.86 4.3 4.3 0 01-3.7-1.92l-.1 1.57-2.92.03zm6.15-2.52c.57 0 1.08-.16 1.56-.45.44-.32.8-.74 1.08-1.25.26-.51.38-1.12.38-1.8 0-.67-.12-1.28-.38-1.79a3.75 3.75 0 00-1.08-1.25 2.95 2.95 0 00-3.12 0c-.45.32-.8.74-1.09 1.25a4.01 4.01 0 00-.38 1.8 3.42 3.42 0 001.47 3.04c.47.29.98.45 1.56.45zm7.51 2.53V11.69h2.93l.1 1.57a3.96 3.96 0 013.54-1.89 4.1 4.1 0 013.82 2.44c.35.76.54 1.7.54 2.75v7.24h-3.19v-6.82c0-.84-.19-1.5-.57-1.99-.38-.48-.9-.74-1.56-.74-.48 0-.9.1-1.27.32-.35.23-.64.52-.86.93a2.7 2.7 0 00-.32 1.35v6.92h-3.16zm12.52 0V6.73h3.19v6.5a4.67 4.67 0 013.73-1.89 5.02 5.02 0 013.95 1.83 6.57 6.57 0 011.59 4.48 6.95 6.95 0 01-1.66 4.58 5.3 5.3 0 01-4.08 1.86 4.3 4.3 0 01-3.7-1.92l-.09 1.57-2.93.03zm6.18-2.53c.58 0 1.09-.16 1.56-.45.45-.32.8-.74 1.09-1.25.25-.51.38-1.12.38-1.8a3.42 3.42 0 00-1.47-3.04 2.95 2.95 0 00-3.12 0c-.44.32-.8.74-1.08 1.25a3.63 3.63 0 00-.38 1.8 3.42 3.42 0 001.47 3.04c.47.29.95.45 1.55.45z">
								</path>
							</svg>
						</div>
					</a>
				</div>
				<div class="flex-initial">
					<div class="flex justify-end items-center relative">
						<div class="inline relative">
							<div class="block flex-grow-0 flex-shrink-0">
								<img class="rounded-xl w-8 h-8 border border-yellow-300 shadow"
                                        src="https://media-exp1.licdn.com/dms/image/C5603AQGEQ6ydraNeww/profile-displayphoto-shrink_200_200/0/1623517758261?e=1629331200&v=beta&t=mhUiw4p21E9okkvInvM0ry8lmLsT6s5ppWMKo6kFs2M">
                                </div>
							</div>
						</div>
					</div>
			</nav>
			<div class="px-3 rounded-lg  flex flex-col w-full">
				<h4 class="text-white text-xl font-semibold  leading-tight truncate">Loremipsum Title
				</h4>
				<div class="flex justify-between items-center ">
					<div class="flex flex-col">
						<h2 class="text-sm flex items-center text-gray-100 font-normal">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
								stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
								</path>
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
							</svg>
							Massive Dynamic
						</h2>
					</div>
				</div>
			</div>

			<div class="flex items-center justify-between mt-3 px-3 z-10">
				<div class="relative w-full">
					<input type="text" class="bg-purple-white shadow rounded-xl border-0 p-3 w-full"
                            placeholder="Search somthing...">
					<div class="absolute top-0 right-0 p-4 pr-3 text-purple-lighter">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class=" p-3 space-y-4 z-0">
			<h4 class="font-semibold mt-2">Category</h4>
			<div class="flex items-center justify-between overflow-y-scroll text-gray-500 cursor-pointer space-x-3">
				<div
					class="flex flex-col items-center justify-center w-20  h-20  bg-green-200 rounded-2xl text-green-600 shadow hover:shadow-md cursor-pointer mb-2 p-1 bg-white transition ease-in duration-300">
					<i class="far fa-hotel"></i>
					<p class="text-sm mt-1">Hotel</p>
				</div>
				<div
					class="flex flex-col items-center justify-center w-20  h-20  bg-yellow-200 rounded-2xl text-yellow-600  shadow hover:shadow-md cursor-pointer mb-2 p-1 bg-white transition ease-in duration-300">
					<i class="far fa-bus"></i>
					<p class="text-sm mt-1">Bus</p>
				</div>

				<div
					class="flex flex-col items-center justify-center w-20  h-20  bg-indigo-200  rounded-2xl  text-indigo-500 shadow hover:shadow-md cursor-pointer mb-2 p-1 bg-white transition ease-in duration-300">
					<i class="far fa-mountains"></i>
					<p class="text-sm mt-1">Hills</p>
				</div>
				<div
					class="flex flex-col items-center justify-center w-20  h-20  bg-pink-200   rounded-2xl text-pink-500 shadow hover:shadow-md cursor-pointer mb-2 p-1 bg-white transition ease-in duration-300">
					<i class="far fa-umbrella-beach"></i>
					<p class="text-sm mt-1">Beach</p>
				</div>
			</div>
			<h4 class="font-semibold">Recomented Hotels</h4>
			<div class="grid m-0  grid-cols-2  space-x-4 overflow-y-scroll flex justify-center items-center w-full ">
				<div class="relative flex flex-col justify-between   bg-white shadow-md rounded-3xl  bg-cover text-gray-800  overflow-hidden cursor-pointer w-full object-cover object-center rounded-lg shadow-md h-64 my-2"
					style="background-image:url('https://images.unsplash.com/reserve/8T8J12VQxyqCiQFGa2ct_bahamas-atlantis.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80')">
					<div class="absolute bg-gradient-to-t from-green-400 to-blue-400  opacity-50 inset-0 z-0"></div>
					<div class="relative flex flex-row items-end  h-72 w-full ">
						<div class="absolute right-0 top-0 m-2">
							<svg xmlns="http://www.w3.org/2000/svg"
								class="h-9 w-9 p-2 text-gray-200 hover:text-blue-400 rounded-full hover:bg-white transition ease-in duration-200 "
								fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
							</svg>
						</div>
						<div class="p-6 rounded-lg  flex flex-col w-full z-10 ">
							<h4 class="mt-1 text-white text-xl font-semibold  leading-tight truncate">Loremipsum..
							</h4>
							<div class="flex justify-between items-center ">
								<div class="flex flex-col">
									<h2 class="text-sm flex items-center text-gray-300 font-normal">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
											</path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
										Dubai
									</h2>
								</div>
							</div>
							<div class="flex pt-4  text-sm text-gray-300">
								<div class="flex items-center mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1"
										viewBox="0 0 20 20" fill="currentColor">
										<path
											d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
										</path>
									</svg>
									<p class="font-normal">4.5</p>
								</div>
								<div class="flex items-center font-medium text-white ">
									$1800
									<span class="text-gray-300 text-sm font-normal"> /wk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="relative flex flex-col justify-between   bg-white shadow-md  rounded-3xl  bg-cover text-gray-800  overflow-hidden cursor-pointer w-full object-cover object-center rounded-lg shadow-md h-64 my-2"
					style="background-image:url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80')">
					<div class="absolute bg-gradient-to-t from-blue-500 to-yellow-400  opacity-50 inset-0 z-0"></div>
					<div class="relative flex flex-row items-end  h-72 w-full ">
						<div class="absolute right-0 top-0 m-2">
							<svg xmlns="http://www.w3.org/2000/svg"
								class="h-9 w-9 p-2 text-gray-200 hover:text-blue-400 rounded-full hover:bg-white transition ease-in duration-200 "
								fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
							</svg>
						</div>
						<div class="p-5 rounded-lg  flex flex-col w-full z-10 ">
							<h4 class="mt-1 text-white text-xl font-semibold  leading-tight truncate">Loremipsum..
							</h4>
							<div class="flex justify-between items-center ">
								<div class="flex flex-col">
									<h2 class="text-sm flex items-center text-gray-300 font-normal">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
											</path>
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
										</svg>
										India
									</h2>
								</div>
							</div>
							<div class="flex pt-4  text-sm text-gray-300">
								<div class="flex items-center mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1"
										viewBox="0 0 20 20" fill="currentColor">
										<path
											d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
										</path>
									</svg>
									<p class="font-normal">4.5</p>
								</div>
								<div class="flex items-center font-medium text-white ">
									$1800
									<span class="text-gray-300 text-sm font-normal"> /wk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h4 class="font-semibold">Suggested By</h4>
			<div class="grid grid-cols-1">
				<div class="">
					<div class="flex  bg-white shadow-md  rounded-2xl p-2">
						<img src="https://images.unsplash.com/photo-1439130490301-25e322d88054?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80"
                                alt="Just a flower" class=" w-16  object-cover  h-16 rounded-xl">
						<div class="flex flex-col justify-center w-full px-2 py-1">
							<div class="flex justify-between items-center ">
								<div class="flex flex-col">
									<h2 class="text-sm font-medium">Massive Dynamic</h2>
								</div>
								<svg xmlns="http://www.w3.org/2000/svg"
									class="h-5 w-5 text-gray-500 hover:text-blue-400 cursor-pointer" fill="none"
									viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
								</svg>
							</div>
							<div class="flex pt-2  text-sm text-gray-400">
								<div class="flex items-center mr-auto">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1"
										viewBox="0 0 20 20" fill="currentColor">
										<path
											d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
										</path>
									</svg>
									<p class="font-normal">4.5</p>
								</div>
								<div class="flex items-center font-medium text-gray-900 ">
									$1800
									<span class="text-gray-400 text-sm font-normal"> /wk</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div
			class="sticky bottom-2  p-5 px-6 m-2   flex items-center justify-between   bg-gray-900 shadow-3xl text-gray-400 rounded-2xl cursor-pointer">
			<div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
					</path>
				</svg>
			</div>
			<div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
				</svg>
			</div>
			<div class="flex flex-col items-center  hover:text-blue-400 ">
				<div
					class="absolute bottom-5 shadow-2xl text-center flex items-center justify-center rounded-full border-4 text-3xl border-gray-50 hover:border-blue-500 bg-blue-500 w-20 h-20 p-2 text-white transition ease-in duration-200 ">
					<i class="fas fa-phone-alt"></i>
					<span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full border-4 opacity-50"></span>
				</div>
			</div>
			<div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
				</svg>
			</div>
			<div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
					</path>
				</svg>
			</div>
		</div>
	</div>
</div>


<style>
	::-webkit-scrollbar {
		width: 0;
	}

	::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0.3);
	}

	::-webkit-scrollbar-thumb {
		background-color: transparent;
		outline: 1px solid transparent;
	}
</style>
    `,
    });


};
