<template>

    <div
            class="
                container
                px-4
                mx-auto
                flex flex-wrap
                items-center
                justify-between
                m-4
            "
        >
            <div
                class="
                    border-8 border-red-500
                    rounded-full
                    bg-white
                    shadow
                    flex
                    w-full
                "
            >
                <input
                    type="text"
                    placeholder="Search by name or category"
                    v-model="search"
                    class="w-full rounded-tl-full text-neutral-focus rounded-bl-full py-2 px-4"
                />
                <button
                    class="
                        btn btn-primary
                        rounded-tr-full rounded-br-full
                        hover:bg-red-300
                        py-2
                        px-4
                    "
                >
                    <p class="font-semibold text-base uppercase" @click="loadStore()" >Search</p>
                </button>
            </div>
        </div>

    <div class="grid grid-cols-1 gap-6">
        <div class="card bordered lg:bg-base-200 rounded-box">
            <div class="card-body" v-for="(item, index) in data.data" :key="index">
                <h2 class="card-title">
                    {{ item.label }}
                    <div class="badge mx-2 badge-secondary">
                        {{ item.category }}
                    </div>
                    <div class="badge mx-2 badge-primary">
                        {{ item.user.email ?? "onix official" }}
                    </div>
                    <div class="badge mx-2 badge-accent">Component</div>
                </h2>

                <isolator v-bind:htmlitem="item.preview"> </isolator>

                <div class="justify-end card-actions">
                    <a
                        class="btn btn-secondary"
                        href="#"
                        @click="downlaodItem(item.id)"
                        >Downlaod</a
                    >
                </div>

                <div class="justify-end card-actions">
                    <div
                        class="flex flex-col items-center py-6 space-y-3"
                        v-if="item.rate"
                    >
                        <span class="text-base">Rating</span>
                        <div class="flex space-x-3">
                            <svg
                                class="w-12 h-12 text-yellow-500"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                v-for="index in item.rate"
                                :key="index"
                            >
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                ></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div
            id="pagination"
            class="
                w-full
                flex
                justify-center
                border-t border-gray-100
                pt-4
                items-center
            "
        >
            <!-- Pagination -->

            <div class="btn-group" v-if="data.meta">
                <div v-for="(item, index) in data.meta.links" :key="index">
                    <button
                        class="btn btn-active"
                        v-if="item.active"
                        @click="pageNumberSelect(item.url)"
                        v-html="item.label"
                    ></button>

                    <button
                        class="btn"
                        v-else
                        @click="pageNumberSelect(item.url)"
                        v-html="item.label"
                    ></button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "example",
    props: {
        onixkey: {
            type: String,
            default: "",
        },
    },
    data: function () {
        return {
            search: "",
            data: [],
        };
    },
    methods: {
        loadStore(url = "https://onixpro.net/api/components/avaliable") {
            axios
                .get(url, {
                    params: {
                        search: this.search,
                    },
                    headers: { Authorization: `Bearer ${this.onixkey}` },
                })
                .then((res) => {
                    this.data = res.data;
                })
                .catch(function (error) {});
        },
        // On page number select
        pageNumberSelect(url) {
            this.loadStore(url);
        },
        downlaodItem(id) {
            axios
                .post("/onixpro/component/download", {
                    id: id,
                })
                .then((res) => {
                    this.systemToast("info", res.data.data.message);
                })
                .catch(function (error) {});
        },
    },
    created() {},
    computed: {},
    mounted() {
        this.loadStore();
    },
};
</script>
<style></style>
