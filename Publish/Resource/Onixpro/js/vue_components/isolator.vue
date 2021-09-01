<template>
    <div class="w-full" v-html="htmlitem"></div>
</template>
<script>
export default {
    name: "isolator",
    props: {
        htmlitem: {
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
    methods: {},
    created() {},
    computed: {},
    mounted() {},
};
</script>
<style></style>
