const plugin = require("tailwindcss/plugin");

module.exports = {
    darkMode: "class",
    purge: {
        // Path to my php view it will only purge stuf we goin to use
        content: ["./vendor/mariojgt/onixpro/src/views/**/*.php"],
        options: {
            // This allow to use multiple themes for daisy UI after purge
            safelist: [/data-theme$/],
        },
    },
    theme: {
        extend: {},
    },
    variants: {
        extend: {
            textOpacity: ["dark"],
        },
    },
    // requried daisy ui framework
    plugins: [require("daisyui")],
};
