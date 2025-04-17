<script setup lang="ts">
import { Category } from "@/types";
import { ref, reactive } from "vue";
import { z } from "zod";
import { createFetch, useFetch } from "@vueuse/core";
const props = defineProps<{
    categories: Category[];
    article_id?: number;
}>();

const emit = defineEmits<{ close: [boolean] }>();

const schema = z.object({
    title: z.string().min(1),
    content: z.string().min(1),
    category_id: z.number(),
});

type Schema = z.output<typeof schema>;
const state = reactive({
    title: "JSHDFJK SDFHK jkjhdkjfh",
    content: "lorem ipsum dolor sit amet",
    category_id: 1 as number | undefined,
    status: "draft" as "draft" | "published",
});
function getCsrfToken() {
    const value = document.cookie.match(/XSRF-TOKEN=([^;]+)/);
    return value ? decodeURIComponent(value[1]) : undefined;
}

if (props.article_id) {
    // if article_id is passed, fetch the article data and set the state
    // fetch article data and set state
    await useFetch(
        route("articles.show", props.article_id),
        {
            method: "GET",
            headers: {
                Accept: " application/json, text/plain, */*",
                // "X-XSRF-TOKEN": getCsrfToken() || "",
                "Content-Type": "application/json",
            },
        },
        {
            immediate: true,
            afterFetch({ data, response, context, execute }) {
                console.log("init edit", response, JSON.parse(data));
                const res_data = JSON.parse(data);
                if (response.status === 200) {
                    state.title = res_data.title;
                    state.content = res_data.content;
                    state.category_id = res_data.category_id;
                    state.status = res_data.status;
                } else {
                    emit("close", false);
                }

                return data;
            },
        }
    ).get();
}

const isFetching = ref<boolean>(false);
const insertData = createFetch({
    options: {
        async beforeFetch({ options }) {
            // console.log("beforeFetch", options);
            isFetching.value = true;
            options.headers = {
                ...options.headers,
                "X-XSRF-TOKEN": getCsrfToken() || "",
                "Content-Type": "application/json",
                Accept: " application/json, text/plain, */*",
            };
            return { options };
        },
        afterFetch({ data, response, context, execute }) {
            console.log("afterFetch", response, JSON.parse(data));
            const res_data = JSON.parse(data);
            isFetching.value = false;
            if (response.status === 201 || response.status === 200) {
                emit("close", true);
            } else {
                emit("close", false);
            }
            return data;
        },
    },
});

const saveAndPublish = async () => {
    console.log("saveAndPublish");
    state.status = "published";
    if (props.article_id) {
        // update article
        await insertData(route("articles.update", props.article_id)).put(state);
    } else {
        // create article
        await insertData(route("articles.store")).post(state);
    }
};
const saveToDraft = async () => {
    console.log("saveToDraft");
    state.status = "draft";
    if (props.article_id) {
        // update article
        await insertData(route("articles.update", props.article_id)).put(state);
    } else {
        // create article
        await insertData(route("articles.store")).post(state);
    }
};
</script>

<template>
    <UModal
        :close="{ onClick: () => emit('close', false) }"
        :title="article_id ? 'update artile' + article_id : `Add new article`"
    >
        <template #body>
            <UForm :state="state" :schema="schema" class="grid gap-4">
                <UFormField
                    label="Title"
                    name="title"
                    description="We'll never share your email with anyone else."
                    size="lg"
                >
                    <UInput
                        placeholder="Enter your email"
                        v-model="state.title"
                        class="w-full"
                    />
                </UFormField>
                <UFormField
                    label="Content"
                    name="content"
                    description="We'll never share your email with anyone else."
                    size="lg"
                >
                    <UTextarea
                        placeholder="Enter your email"
                        v-model="state.content"
                        class="w-full"
                    />
                </UFormField>
                <UFormField
                    label="Category"
                    name="category"
                    description="We'll never share your email with anyone else."
                    size="lg"
                >
                    <USelectMenu
                        :items="categories"
                        value-key="id"
                        label-key="title"
                        placeholder="Select a category"
                        v-model="state.category_id"
                        class="w-full"
                    />
                </UFormField>
            </UForm>
        </template>
        <template #footer>
            <div class="flex gap-2">
                <UButton
                    :loading="isFetching"
                    color="error"
                    label="Cancel"
                    @click="emit('close', false)"
                />
                <UButton
                    :loading="isFetching"
                    label="Save & Publish"
                    @click="saveAndPublish"
                    color="primary"
                />
                <UButton
                    :loading="isFetching"
                    color="neutral"
                    label="Save as Draft"
                    @click="saveToDraft"
                />
            </div>
        </template>
    </UModal>
</template>
