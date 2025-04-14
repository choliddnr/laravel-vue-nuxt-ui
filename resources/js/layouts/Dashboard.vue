<script setup lang="ts">
import { computed, ref } from "vue";
// import { useRoute } from "vue-router";
import { useStorage } from "@vueuse/core";

import TeamsMenu from "@/components/TeamsMenu.vue";
import UserMenu from "@/components/UserMenu.vue";
import NotificationsSlideover from "@/components/NotificationsSlideover.vue";
import { route } from "ziggy-js";
import { router } from "@inertiajs/vue3";

const toast = useToast();
// const route = useRoute();
console.log("route;", route().current());
const open = ref(false);

const links = [
    [
        {
            label: "Home",
            icon: "i-lucide-house",
            // to: "/dashboard",

            onSelect: () => {
                router.visit(route("dashboard.index"));
            },
            // onSelect: () => {
            //     open.value = false;
            // },
        },
        {
            label: "Articles",
            icon: "i-lucide-house",
            onSelect: () => {
                router.visit(route("dashboard.articles"));
            },
            // onSelect: () => {
            //     open.value = false;
            // },
        },
        {
            label: "Inbox",
            icon: "i-lucide-inbox",
            // to: "/dashboard/inbox",
            badge: "4",

            onSelect: () => {
                router.visit(route("dashboard.inbox"));
            },
            // onSelect: () => {
            //     open.value = false;
            // },
        },
        {
            label: "Customers",
            icon: "i-lucide-users",
            // to: "/dashboard/customers",

            onSelect: () => {
                router.visit(route("dashboard.customers"));
            },
            // onSelect: () => {
            //     open.value = false;
            // },
        },
        {
            label: "Settings",
            // to: "/dashboard/settings",
            icon: "i-lucide-settings",
            defaultOpen: true,
            children: [
                {
                    label: "General",
                    // to: "/dashboard/settings",
                    exact: true,

                    onSelect: () => {
                        router.visit(route("dashboard.settings"));
                    },
                    // onSelect: () => {
                    //     open.value = false;
                    // },
                },
                {
                    label: "Members",
                    // to: "/dashboard/settings/members",

                    onSelect: () => {
                        router.visit(route("dashboard.settings.members"));
                    },
                    // onSelect: () => {
                    //     open.value = false;
                    // },
                },
                {
                    label: "Notifications",
                    // to: "/dashboard/settings/notifications",

                    onSelect: () => {
                        router.visit(route("dashboard.settings.notifications"));
                    },
                    // onSelect: () => {
                    //     open.value = false;
                    // },
                },
                {
                    label: "Security",
                    // to: "/dashboard/settings/security",

                    onSelect: () => {
                        router.visit(route("dashboard.settings.security"));
                    },
                    // onSelect: () => {
                    //     open.value = false;
                    // },
                },
            ],
        },
    ],
    [
        {
            label: "Feedback",
            icon: "i-lucide-message-circle",
            // to: "https://github.com/nuxt-ui-pro/dashboard-vue",
            target: "_blank",
        },
        {
            label: "Help & Support",
            icon: "i-lucide-info",
            // to: "https://github.com/nuxt/ui-pro",
            target: "_blank",
        },
    ],
];

const groups = computed(() => [
    {
        id: "links",
        label: "Go to",
        items: links.flat(),
    },
    {
        id: "code",
        label: "Code",
        items: [
            {
                id: "source",
                label: "View page source",
                icon: "simple-icons:github",
                // to: `https://github.com/nuxt-ui-pro/dashboard-vue/blob/main/src/pages${
                //     route.path === "/" ? "/index" : route.path
                // }.vue`,
                target: "_blank",
            },
        ],
    },
]);

const cookie = useStorage("cookie-consent", "pending");
if (cookie.value !== "accepted") {
    toast.add({
        title: "We use first-party cookies to enhance your experience on our website.",
        duration: 0,
        close: false,
        actions: [
            {
                label: "Accept",
                color: "neutral",
                variant: "outline",
                onClick: () => {
                    cookie.value = "accepted";
                },
            },
            {
                label: "Opt out",
                color: "neutral",
                variant: "ghost",
            },
        ],
    });
}
</script>

<template>
    <Suspense>
        <UApp>
            <UDashboardGroup unit="rem" storage="local">
                <UDashboardSidebar
                    id="default"
                    v-model:open="open"
                    collapsible
                    resizable
                    class="bg-(--ui-bg-elevated)/25"
                    :ui="{ footer: 'lg:border-t lg:border-(--ui-border)' }"
                >
                    <template #header="{ collapsed }">
                        <TeamsMenu :collapsed="collapsed" />
                    </template>

                    <template #default="{ collapsed }">
                        <UDashboardSearchButton
                            :collapsed="collapsed"
                            class="bg-transparent ring-(--ui-border)"
                        />
                        <!-- 
                        <UNavigationMenu
                            :collapsed="collapsed"
                            orientation="vertical"
                            :items="links[0]"
                        >
                            <template #item="{ item }">
                            </template>
                        </UNavigationMenu> -->

                        <UNavigationMenu
                            :collapsed="collapsed"
                            :items="links[0]"
                            orientation="vertical"
                        />

                        <UNavigationMenu
                            :collapsed="collapsed"
                            :items="links[1]"
                            orientation="vertical"
                            class="mt-auto"
                        />
                    </template>

                    <template #footer="{ collapsed }">
                        <UserMenu :collapsed="collapsed" />
                    </template>
                </UDashboardSidebar>

                <UDashboardSearch :groups="groups" />

                <slot />

                <NotificationsSlideover />
            </UDashboardGroup>
        </UApp>
    </Suspense>
</template>
