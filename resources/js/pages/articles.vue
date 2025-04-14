<script setup lang="ts">
import { useTemplateRef, h, ref, watch, resolveComponent, computed } from "vue";
import { upperFirst } from "scule";
import type { TableColumn } from "@nuxt/ui";
import { rand, refDebounced, useDebounce, useFetch } from "@vueuse/core";
import { getPaginationRowModel, type Row } from "@tanstack/table-core";
import { ApiPagination, type Article, type User } from "@/types";
import CustomersAddModal from "@/components/customers/CustomersAddModal.vue";
import CustomersDeleteModal from "@/components/customers/CustomersDeleteModal.vue";
import type { Pagination } from "@/types";

import Dashboard from "@/layouts/Dashboard.vue";

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

const table = useTemplateRef("table");
const columnFilters = ref([
    {
        id: "title",
        value: "",
    },
]);

const columnVisibility = ref();
const rowSelection = ref({ 1: false });

function getRowItems(row: Row<Article>) {
    return [
        {
            type: "label",
            label: "Actions",
        },
        {
            label: "Copy customer ID",
            icon: "i-lucide-copy",
            onSelect() {
                navigator.clipboard.writeText(row.original.id!.toString());
                toast.add({
                    title: "Copied to clipboard",
                    description: "Customer ID copied to clipboard",
                });
            },
        },
        {
            type: "separator",
        },
        {
            label: "Show",
            icon: "i-lucide-eye",
        },
        {
            label: "Edit",
            icon: "i-lucide-pencil",
        },
        {
            label: "Change Status",
            icon: "i-lucide-refresh-cw",
        },
        {
            type: "separator",
        },
        {
            label: "Delete article",
            icon: "i-lucide-trash",
            color: "error",
            onSelect() {
                toast.add({
                    title: "Article deleted",
                    description: "The article has been deleted.",
                });
            },
        },
    ];
}

const columns: TableColumn<Article>[] = [
    // {
    //     id: "select",
    //     header: ({ table }) =>
    //         h(UCheckbox, {
    //             modelValue: table.getIsSomePageRowsSelected()
    //                 ? "indeterminate"
    //                 : table.getIsAllPageRowsSelected(),
    //             "onUpdate:modelValue": (value: boolean | "indeterminate") =>
    //                 table.toggleAllPageRowsSelected(!!value),
    //             ariaLabel: "Select all",
    //         }),
    //     cell: ({ row }) =>
    //         h(UCheckbox, {
    //             modelValue: row.getIsSelected(),
    //             "onUpdate:modelValue": (value: boolean | "indeterminate") =>
    //                 row.toggleSelected(!!value),
    //             ariaLabel: "Select row",
    //         }),
    // },
    // {
    //     accessorKey: "id",
    //     header: "ID",
    // },
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

const statusFilter = ref("all");

watch(
    () => statusFilter.value,
    (newVal) => {
        if (!table?.value?.tableApi) return;

        const statusColumn = table.value.tableApi.getColumn("status");
        if (!statusColumn) return;

        if (newVal === "all") {
            statusColumn.setFilterValue(undefined);
        } else {
            statusColumn.setFilterValue(newVal);
        }
    }
);

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
        debouncedSearch.value
);

const articles = ref<Article[]>([]);
const {
    isFetching,
    error,
    data: articlesData,
} = await useFetch<ApiPagination<Article>>(page_url, {
    refetch: true,
    afterFetch({ data, response, context, execute }) {
        console.log("ctx", JSON.parse(data));
        const res_data = JSON.parse(data);
        pagination.value.total = res_data.meta.total;
        pagination.value.pageSize = res_data.meta.per_page;
        articles.value = res_data.data;
        return data;
    },
});
watch(search, () => {
    console.log("page_url", debouncedSearch.value);
});
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
                <!-- <UInput
                    :model-value="(table?.tableApi?.getColumn('title')?.getFilterValue() as string)"
                    class="max-w-sm"
                    icon="i-lucide-search"
                    placeholder="Filter titles..."
                    @update:model-value="
                        table?.tableApi
                            ?.getColumn('title')
                            ?.setFilterValue($event)
                    "
                /> -->
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
                        v-model="statusFilter"
                        :items="categories"
                        :ui="{
                            trailingIcon:
                                'group-data-[state=open]:rotate-180 transition-transform duration-200',
                        }"
                        placeholder="Filter status"
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
