import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import vue from "@vitejs/plugin-vue";
import uiPro from "@nuxt/ui-pro/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.ts"],
            refresh: true,
        }),
        vue({
            include: [/\.vue$/],
        }),
        uiPro({
            autoImport: true,
            ui: {
                colors: {
                    primary: "indigo",
                    neutral: "zinc",
                },
            },
        }),
        tailwindcss(),
    ],
});
