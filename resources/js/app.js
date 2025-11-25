import { createApp } from "vue";
import VueApexCharts from "vue3-apexcharts";

import DashboardKai from "./components/DashboardKai.vue";

const app = createApp({});

app.use(VueApexCharts);
app.component("dashboard-kai", DashboardKai);

app.mount("#app");
