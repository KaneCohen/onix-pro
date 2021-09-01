// Load vue js
import { createApp, h } from "vue";

import tabs from "./vue_components/Tabs";
import Tab from "./vue_components/Tab";
import StoreComponents from "./vue_components/storeComponents";
import StorePages from "./vue_components/storePages";
import isolator from "./vue_components/isolator";

const el = document.getElementById("app");

const app = createApp({});

// Make the swet alert avaliable to use inside vue js
app.mixin({
    methods: {
        toast: function (message, icon) {
            Swal.fire({
                position: "center",
                icon: icon,
                title: message,
                showConfirmButton: false,
                timer: 2500,
            });
        },
        systemToast: function (icon, message) {
            const Toast = Swal.mixin({
                toast: true,
                position: "center",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });

            Toast.fire({
                icon: icon,
                title: message,
            });
        },
        unityToast: function (message, color = "#0e2c88") {
            Toastify({
                text: message,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "center",
                backgroundColor: color,
                stopOnFocus: true,
            }).showToast();
        },
    },
});

// Reusable
app.component("tabs", tabs);
app.component("tab", Tab);
app.component("store-components", StoreComponents);
app.component("store-pages", StorePages);
app.component("isolator", isolator);

app.mount(el);
