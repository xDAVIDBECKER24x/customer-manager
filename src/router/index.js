import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";

const router = createRouter({
    history: createWebHistory(
        import.meta.env.BASE_URL),
    routes: [{
            path: "/",
            name: "home",
            component: HomeView,
        },
        {
            path: "/product",
            name: "product",
            component: () =>
                import ("../views/ProductView.vue"),
        },
        {
            path: "/client",
            name: "client",
            component: () =>
                import ("../views/ClientView.vue"),
        },
        {
            path: "/client/create",
            name: "clientCreate",
            component: () =>
                import ("../views/ClientCreateView.vue"),
        },
    ],
});

export default router;