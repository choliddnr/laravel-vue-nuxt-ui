import { ref, watch, toRef } from "vue";
import { useRoute, useRouter } from "vue-router";
import { createSharedComposable } from "@vueuse/core";
import { router } from "@inertiajs/vue3";
import { route } from "ziggy-js";

const _useDashboard = () => {
    // const vue_route = useRoute();
    // const router = useRouter();
    const isNotificationsSlideoverOpen = ref(false);

    defineShortcuts({
        "g-d": () => router.visit(route("dashboard.index")),
        "g-a": () => router.visit(route("dashboard.articles")),
        "g-i": () => router.visit(route("dashboard.inbox")),
        "g-c": () => router.visit(route("dashboard.customers")),
        "g-s": () => router.visit(route("dashboard.settings")),

        // "g-c": () => router.visit("/customers"),
        // "g-s": () => router.visit("/settings"),
        n: () =>
            (isNotificationsSlideoverOpen.value =
                !isNotificationsSlideoverOpen.value),
    });

    // watch(
    //     () => vue_route.fullPath,
    //     () => {
    //         isNotificationsSlideoverOpen.value = false;
    //         console.log("route changed", router);
    //     }
    // );

    console.log("route", route().current());

    // watch(toRef(route().current()), () => {});

    return {
        isNotificationsSlideoverOpen,
    };
};

export const useDashboard = createSharedComposable(_useDashboard);
