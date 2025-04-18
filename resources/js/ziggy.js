const Ziggy = {
    url: env("APP_URL"),
    port: null,
    defaults: {},
    routes: {
        home: { uri: "/", methods: ["GET", "HEAD"] },
        blog: { uri: "blog", methods: ["GET", "HEAD"] },
        about: { uri: "about", methods: ["GET", "HEAD"] },
        contact: { uri: "contact", methods: ["GET", "HEAD"] },
        author: {
            uri: "author/{user}",
            methods: ["GET", "HEAD"],
            parameters: ["user"],
            bindings: { user: "username" },
        },
        category: {
            uri: "category/{category}",
            methods: ["GET", "HEAD"],
            parameters: ["category"],
            bindings: { category: "slug" },
        },
        post: {
            uri: "blog/{article}",
            methods: ["GET", "HEAD"],
            parameters: ["article"],
            bindings: { article: "slug" },
        },
        "dashboard.index": { uri: "dashboard", methods: ["GET", "HEAD"] },
        "dashboard.inbox": { uri: "dashboard/inbox", methods: ["GET", "HEAD"] },
        "dashboard.customers": {
            uri: "dashboard/customers",
            methods: ["GET", "HEAD"],
        },
        "dashboard.settings": {
            uri: "dashboard/settings",
            methods: ["GET", "HEAD"],
        },
        "dashboard.settings.members": {
            uri: "dashboard/settings/members",
            methods: ["GET", "HEAD"],
        },
        "dashboard.settings.notifications": {
            uri: "dashboard/settings/notifications",
            methods: ["GET", "HEAD"],
        },
        "dashboard.settings.security": {
            uri: "dashboard/settings/security",
            methods: ["GET", "HEAD"],
        },
        "storage.local": {
            uri: "storage/{path}",
            methods: ["GET", "HEAD"],
            wheres: { path: ".*" },
            parameters: ["path"],
        },
    },
};
if (typeof window !== "undefined" && typeof window.Ziggy !== "undefined") {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
