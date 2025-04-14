<script setup lang="ts">
import { ref, computed } from "vue";
import type { AvatarProps, DropdownMenuItem } from "@nuxt/ui";
import { useColorMode } from "@vueuse/core";
import type { SharedData, User } from "@/types";
import { usePage } from "@inertiajs/vue3";

defineProps<{
    collapsed?: boolean;
}>();

const page = usePage<SharedData>();
console.log(page.props);

const colorMode = useColorMode();
const user = page.props.auth.user;
// const user = ref({
//     name: "Benjamin Canac",
//     avatar: {
//         src: "https://github.com/benjamincanac.png",
//         alt: "Benjamin Canac",
//     },
// });

const items = computed<DropdownMenuItem[][]>(() => [
    [
        {
            type: "label",
            label: user.name,
            avatar: { src: user.avatar, alt: user.name } as AvatarProps,
        },
    ],
    [
        {
            label: "Profile",
            icon: "i-lucide-user",
        },
        {
            label: "Billing",
            icon: "i-lucide-credit-card",
        },
        {
            label: "Settings",
            icon: "i-lucide-settings",
            to: "/settings",
        },
    ],
    [
        {
            label: "Appearance",
            icon: "i-lucide-sun-moon",
            children: [
                {
                    label: "Light",
                    icon: "i-lucide-sun",
                    type: "checkbox",
                    checked: colorMode.value === "light",
                    onSelect(e: Event) {
                        e.preventDefault();

                        colorMode.value = "light";
                    },
                },
                {
                    label: "Dark",
                    icon: "i-lucide-moon",
                    type: "checkbox",
                    checked: colorMode.value === "dark",
                    onUpdateChecked(checked: boolean) {
                        if (checked) {
                            colorMode.value = "dark";
                        }
                    },
                    onSelect(e: Event) {
                        e.preventDefault();
                    },
                },
            ],
        },
    ],
    [
        {
            label: "Documentation",
            icon: "i-lucide-book-open",
            to: "https://ui.nuxt.com/getting-started/installation/pro/vue",
            target: "_blank",
        },
        {
            label: "GitHub repository",
            icon: "simple-icons:github",
            to: "https://github.com/nuxt-ui-pro/dashboard-vue",
            target: "_blank",
        },
        {
            label: "Upgrade to Pro",
            icon: "i-lucide-rocket",
            to: "https://ui.nuxt.com/pro/purchase",
            target: "_blank",
        },
    ],
    [
        {
            label: "Log out",
            icon: "i-lucide-log-out",
        },
    ],
]);
const theUser = {
    name: "Benjamin Canac",
    avatar: {
        src: "https://github.com/benjamincanac.png",
        alt: "Benjamin Canac",
    },
};
</script>

<template>
    <UDropdownMenu
        :items="items"
        :content="{ align: 'center', collisionPadding: 12 }"
        :ui="{
            content: collapsed
                ? 'w-48'
                : 'w-(--reka-dropdown-menu-trigger-width)',
        }"
    >
        <UButton
            v-bind="{
                avatar:{src:user?.avatar, alt:user?.name} as AvatarProps,
                label: collapsed ? undefined : user?.name,
                trailingIcon: collapsed
                    ? undefined
                    : 'i-lucide-chevrons-up-down',
            }"
            color="neutral"
            variant="ghost"
            block
            :square="collapsed"
            class="data-[state=open]:bg-(--ui-bg-elevated)"
            :ui="{ trailingIcon: 'text-(--ui-text-dimmed)' }"
        />
    </UDropdownMenu>
</template>
