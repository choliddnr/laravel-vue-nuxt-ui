import type { AvatarProps } from "@nuxt/ui";
import type { PageProps } from "@inertiajs/core";
export type UserStatus = "subscribed" | "unsubscribed" | "bounced";
export type SaleStatus = "paid" | "failed" | "refunded";

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: AvatarProps;
    status: UserStatus;
    location: string;
}

export interface Mail {
    id: number;
    unread?: boolean;
    from: User;
    subject: string;
    body: string;
    date: string;
}

export interface Member {
    name: string;
    username: string;
    role: "member" | "owner";
    avatar: Avatar;
}

export interface Stat {
    title: string;
    icon: string;
    value: number | string;
    variation: number;
    formatter?: (value: number) => string;
}

export interface Sale {
    id: string;
    date: string;
    status: SaleStatus;
    email: string;
    amount: number;
}

export interface Notification {
    id: number;
    unread?: boolean;
    sender: User;
    body: string;
    date: string;
}

export type Period = "daily" | "weekly" | "monthly";

export interface Range {
    start: Date;
    end: Date;
}

import type { route as routeFn } from "ziggy-js";

declare module "vue" {
    interface ComponentCustomProperties {
        route: typeof routeFn;
    }
}

export type Pagination<T> = {
    current_page: number;
    data: T[];
    first_page_url: string;
    from: number;
    last_page: number;
    last_page_url: string;
    links: {
        url: string | null;
        label: string;
        active: boolean;
    }[];
    next_page_url: string | null;
    path: string;
    per_page: number;
    prev_page_url: string | null;
    to: number;
    total: number;
};

export type User = {
    id?: number;
    name: string;
    username: string;
    avatar: string;
    job: string;
    created_at: Date | string;
    email: string;
    updated_at: Date | string;
};

export type Category = {
    created_at: Date | string;
    description: string;
    id: number;
    slug: string;
    title: string;
    updated_at: Date | string;
};

export type Article = {
    author?: User;
    author_id: number;
    category?: Category;
    category_id: number;
    content: string;
    created_at: Date | string;
    id?: number;
    image?: string;
    slug: string;
    title: string;
    status: "published" | "draft" | "archived";
    updated_at: Date | string;
};

export type ApiPagination<T> = {
    data: T[];
    links: {
        first: string | null;
        last: string | null;
        prev: string | null;
        next: string | null;
    };
    meta: {
        current_page: number;
        from: number;
        last_page: number;
        links: {
            url: string | null;
            label: string;
            active: boolean;
        }[];
        path: string;
        per_page: number;
        to: number;
        total: number;
    };
};

export type Auth = {
    user: User;
};

export type SharedData = PageProps & {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    ziggy: Config & { location: string };
};
