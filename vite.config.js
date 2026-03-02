import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

module.exports = {
    darkMode: ["class", '[data-theme="synthwave"]'],
    content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx,vue}"],
    theme: {
        extend: {},
    },
    plugins: [],
};
