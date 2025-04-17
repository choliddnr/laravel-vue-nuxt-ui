<script setup lang="ts">
import { useTemplateRef, h, ref, resolveComponent, computed } from "vue";
import { upperFirst } from "scule";
import type { TableColumn } from "@nuxt/ui";
import { rand, refDebounced, useFetch } from "@vueuse/core";
import { type Row } from "@tanstack/table-core";
import { ApiPagination, type Article, type User } from "@/types";
import CustomersDeleteModal from "@/components/customers/CustomersDeleteModal.vue";
import Dashboard from "@/layouts/Dashboard.vue";
import LazyForm from "@/components/article/Form.vue";

function getCsrfToken() {
    const value = document.cookie.match(/XSRF-TOKEN=([^;]+)/);
    return value ? decodeURIComponent(value[1]) : undefined;
}

const article_id = ref<number | null>(null);

defineOptions({ layout: Dashboard });
const { categories } = defineProps<{
    // articles: Pagination<Article>;
    categories: any[];
}>();

const UButton = resolveComponent("UButton");
const UBadge = resolveComponent("UBadge");
const UDropdownMenu = resolveComponent("UDropdownMenu");
const toast = useToast();
const search = ref<string>("");
const debouncedSearch = refDebounced(search, 1000);

const statusFilter = ref("");
const categoryFilter = ref("");

const overlay = useOverlay();

const columnVisibility = ref();

const table = useTemplateRef("table");

const items = [
    [
        {
            label: "New mail",
            icon: "i-lucide-send",
            to: "/inbox",
        },
        {
            label: "New customer",
            icon: "i-lucide-user-plus",
            to: "/customers",
        },
    ],
];

const columnFilters = ref([
    {
        id: "title",
        value: "",
    },
]);

const rowSelection = ref({ 1: false });

const getRowItems = (row: Row<Article>) => {
    return [
        {
            type: "label",
            label: "Actions",
        },
        {
            label: "Copy customer ID",
            icon: "i-lucide-copy",
            onSelect: () => {
                // navigator.clipboard.writeText("row.original.id!.toString()");
                console.log(navigator);
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(row.original.id!.toString());
                    toast.add({
                        title:
                            "Copied to clipboard" + row.original.id!.toString(),
                        description: "Customer ID copied to clipboard",
                    });
                } else {
                    console.log("Clipboard API not supported");
                    toast.add({
                        title: "Failed" + row.original.id!.toString(),
                        description: "Copy id is not supported",
                        color: "error",
                    });
                }
            },
        },
        {
            type: "separator",
        },
        {
            label: "Show",
            icon: "i-lucide-eye",
            to: route("post", row.original.slug),
            target: "_blank",
            disabled: row.original.status !== "published",
        },
        {
            label: "Edit",
            icon: "i-lucide-pencil",
            onSelect() {
                article_id.value = row.original.id || null;
                open();
            },
        },
        {
            label: row.original.status !== "published" ? "Publish" : "Archive",
            icon: "i-lucide-refresh-cw",
            onSelect: async () => {
                const status =
                    row.original.status !== "published"
                        ? "published"
                        : "archived";
                await updateStatus(row.original.id!, status);
            },
        },
        {
            type: "separator",
        },
        {
            label: "Delete article",
            icon: "i-lucide-trash",
            color: "error",
            onSelect: async () => {
                destroy(row.original.id!);
            },
        },
    ];
};

const columns: TableColumn<Article>[] = [
    {
        accessorKey: "title",
        header: "TItle",
        cell: ({ row }) => row.original.title,
    },
    {
        accessorKey: "reads",
        header: "Reads",
        cell: ({ column }) => rand(500, 1000),
    },
    {
        accessorKey: "category",
        header: "Category",
        cell: ({ row }) => row.original.category?.title,
    },
    {
        accessorKey: "status",
        header: "Status",
        filterFn: "equals",
        cell: ({ row }) => {
            const color = {
                published: "success" as const,
                draft: "error" as const,
                archived: "warning" as const,
            }[row.original.status];

            return h(
                UBadge,
                { class: "capitalize", variant: "subtle", color },
                () => row.original.status
            );
        },
    },
    {
        id: "actions",
        cell: ({ row }) => {
            return h(
                "div",
                { class: "text-right" },
                h(
                    UDropdownMenu,
                    {
                        content: {
                            align: "end",
                        },
                        items: getRowItems(row),
                    },
                    () =>
                        h(UButton, {
                            icon: "i-lucide-ellipsis-vertical",
                            color: "neutral",
                            variant: "ghost",
                            class: "ml-auto",
                        })
                )
            );
        },
    },
];

const statuses = [
    {
        title: "All",
    },
    {
        id: "published",
        title: "Published",
    },
    {
        id: "published",
        title: "Published",
    },
    {
        id: "draft",
        title: "Draft",
    },
    {
        id: "archived",
        title: "Archived",
    },
];

const pagination = ref({
    pageIndex: 0,
    pageSize: 0,
    total: 0,
});
const page_url = computed<string>(
    () =>
        "http://laravel-clean.test/dashboard/blog?page=" +
        (pagination.value.pageIndex + 1) +
        "&search=" +
        debouncedSearch.value +
        "&category=" +
        (categoryFilter.value || "") +
        "&status=" +
        (statusFilter.value || "")
);
const articles = ref<Article[]>([]);
const { isFetching, execute } = await useFetch<ApiPagination<Article>>(
    page_url,
    {
        refetch: true,
        afterFetch({ data, response, context, execute }) {
            console.log("ctx", JSON.parse(data));
            const res_data = JSON.parse(data);
            pagination.value.total = res_data.meta.total;
            pagination.value.pageSize = res_data.meta.per_page;
            articles.value = res_data.data;
            return data;
        },
    }
);

const modal = overlay.create(LazyForm, {
    props: {
        categories: categories,
        article_id: article_id,
    },
});

const open = async () => {
    const isSuccess = await modal.open();

    if (isSuccess) {
        execute();

        toast.add({
            title: `New article created`,
            description: "The article has been created.",
            color: "success",
            id: "modal-success",
        });

        return;
    }

    toast.add({
        title: `No article created`,
        description: "The article has not been created. Something went wrong.",
        color: "error",
        id: "modal-dismiss",
    });
};
const destroy = async (id: number) => {
    // const data = await useFetch(route("articles.destroy", id)).delete();
    await useFetch(
        route("articles.destroy", id),
        {
            method: "DELETE",
            headers: {
                Accept: " application/json, text/plain, */*",
                "X-XSRF-TOKEN": getCsrfToken() || "",
                "Content-Type": "application/json",
            },
        },

        {
            afterFetch({ data, response }) {
                console.log("ctx", response, JSON.parse(data));
                if (response.status === 200) {
                    toast.add({
                        title: `Article deleted`,
                        description: "The article has been deleted.",
                        color: "success",
                        id: "modal-success",
                    });
                    execute();
                } else {
                    toast.add({
                        title: `Failed`,
                        description: "The article has not been deleted.",
                        color: "error",
                        id: "modal-dismiss",
                    });
                }

                return data;
            },
        }
    ).delete(id);
};
const updateStatus = async (id: number, status: string) => {
    await useFetch(
        route("articles.updateStatus", id),
        {
            method: "PATCH",
            headers: {
                Accept: " application/json, text/plain, */*",
                "X-XSRF-TOKEN": getCsrfToken() || "",
                "Content-Type": "application/json",
            },
        },
        {
            afterFetch({ data, response }) {
                console.log(
                    "change status response",
                    response,
                    JSON.parse(data)
                );
                if (response.status === 200) {
                    toast.add({
                        title: `Article archived`,
                        description: "The article has been archived.",
                        color: "success",
                        id: "modal-success",
                    });
                    execute();
                } else {
                    toast.add({
                        title: `Failed`,
                        description: "The article has not been archived.",
                        color: "error",
                        id: "modal-dismiss",
                    });
                }
                return data;
            },
        }
    ).patch({ status: status });
};
console.log("categories", categories);
</script>
<template>
    <UDashboardPanel id="articles">
        <template #header>
            <UDashboardNavbar title="Articles" :ui="{ right: 'gap-3' }">
                <template #leading>
                    <UDashboardSidebarCollapse />
                </template>

                <template #right>
                    <UTooltip text="Notifications" :shortcuts="['N']">
                        <UButton color="neutral" variant="ghost" square>
                            <UChip color="error" inset>
                                <UIcon
                                    name="i-lucide-bell"
                                    class="size-5 shrink-0"
                                />
                            </UChip>
                        </UButton>
                    </UTooltip>

                    <UDropdownMenu :items="items">
                        <UButton
                            icon="i-lucide-plus"
                            size="md"
                            class="rounded-full"
                        />
                    </UDropdownMenu>
                </template>
            </UDashboardNavbar>
        </template>

        <template #body>
            <div class="flex flex-wrap items-center justify-between gap-1.5">
                <UInput
                    v-model="search"
                    class="max-w-sm"
                    icon="i-lucide-search"
                    placeholder="Filter titles..."
                />
                <div class="flex flex-wrap items-center gap-1.5">
                    <CustomersDeleteModal
                        :count="
                            table?.tableApi?.getFilteredSelectedRowModel().rows
                                .length
                        "
                    >
                        <UButton
                            v-if="
                                table?.tableApi?.getFilteredSelectedRowModel()
                                    .rows.length
                            "
                            label="Delete"
                            color="error"
                            variant="subtle"
                            icon="i-lucide-trash"
                        >
                            <template #trailing>
                                <UKbd>
                                    {{
                                        table?.tableApi?.getFilteredSelectedRowModel()
                                            .rows.length
                                    }}
                                </UKbd>
                            </template>
                        </UButton>
                    </CustomersDeleteModal>

                    <USelect
                        v-model="categoryFilter"
                        :items="[{ id: 'all', title: 'All' }, ...categories]"
                        default-value=""
                        value-key="slug"
                        label-key="title"
                        :ui="{
                            trailingIcon:
                                'group-data-[state=open]:rotate-180 transition-transform duration-200',
                        }"
                        placeholder="Filter Category"
                        class="min-w-28"
                    />
                    <USelect
                        v-model="statusFilter"
                        :items="statuses"
                        default-value=""
                        value-key="id"
                        label-key="title"
                        :ui="{
                            trailingIcon:
                                'group-data-[state=open]:rotate-180 transition-transform duration-200',
                        }"
                        placeholder="Filter Status"
                        class="min-w-28"
                    />
                    <UDropdownMenu
                        :items="
              table?.tableApi
                ?.getAllColumns()
                .filter((column: any) => column.getCanHide())
                .map((column: any) => ({
                  label: upperFirst(column.id),
                  type: 'checkbox' as const,
                  checked: column.getIsVisible(),
                  onUpdateChecked(checked: boolean) {
                    table?.tableApi?.getColumn(column.id)?.toggleVisibility(!!checked)
                  },
                  onSelect(e?: Event) {
                    e?.preventDefault()
                  }
                }))
            "
                        :content="{ align: 'end' }"
                    >
                        <UButton
                            label="Display"
                            color="neutral"
                            variant="outline"
                            trailing-icon="i-lucide-settings-2"
                        />
                    </UDropdownMenu>
                    <UButton
                        label="New Articlce"
                        color="primary"
                        @click="
                            () => {
                                article_id = null;
                                open();
                            }
                        "
                    />
                </div>
            </div>

            <UTable
                ref="table"
                v-model:column-filters="columnFilters"
                v-model:column-visibility="columnVisibility"
                v-model:row-selection="rowSelection"
                v-model:pagination="pagination"
                :pagination-options="{
                    // getPaginationRowModel: getPaginationRowModel(),
                    manualPagination: true,
                    rowCount: pagination.total,
                }"
                class="shrink-0"
                :data="articles ?? []"
                :columns="columns"
                :loading="isFetching"
                :ui="{
                    base: 'table-fixed border-separate border-spacing-0',
                    thead: '[&>tr]:bg-(--ui-bg-elevated)/50 [&>tr]:after:content-none',
                    tbody: '[&>tr]:last:[&>td]:border-b-0',
                    th: 'first:rounded-l-[calc(var(--ui-radius)*2)] last:rounded-r-[calc(var(--ui-radius)*2)] border-y border-(--ui-border) first:border-l last:border-r',
                    td: 'border-b border-(--ui-border)',
                }"
            />
            <!-- :ui="{
                        base: 'table-fixed border-separate border-spacing-0',
                        thead: '[&>tr]:bg-(--ui-bg-elevated)/50 [&>tr]:after:content-none',
                        tbody: '[&>tr]:last:[&>td]:border-b-0',
                        th: 'py-1 first:rounded-l-[calc(var(--ui-radius)*2)] last:rounded-r-[calc(var(--ui-radius)*2)] border-y border-(--ui-border) first:border-l last:border-r',
                        td: 'border-b border-(--ui-border)',
                    }" -->

            <div
                class="flex items-center justify-between gap-3 border-t border-(--ui-border) pt-4 mt-auto"
            >
                <div class="text-sm text-(--ui-text-muted)">
                    {{
                        table?.tableApi?.getFilteredSelectedRowModel().rows
                            .length || 0
                    }}
                    of
                    {{
                        table?.tableApi?.getFilteredRowModel().rows.length || 0
                    }}
                    row(s) selected.
                </div>

                <div class="flex items-center gap-1.5">
                    <UPagination
                        show-edges
                        :default-page="
                            (table?.tableApi?.getState().pagination.pageIndex ||
                                0) + 1
                        "
                        :items-per-page="pagination.pageSize"
                        :total="pagination.total"
                        @update:page="(p: number) => table?.tableApi?.setPageIndex(p - 1)"
                    />
                </div>
            </div>
        </template>
    </UDashboardPanel>
</template>
