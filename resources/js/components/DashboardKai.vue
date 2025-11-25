<template>
    <div class="row">
        <!-- Statistik Cards -->
        <div
            class="col-lg-3 col-md-6"
            v-for="card in statCards"
            :key="card.title"
        >
            <div class="card card-stats card-round shadow-sm">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-4 text-center">
                            <div
                                class="icon-big icon-primary bubble-shadow-small"
                            >
                                <i :class="card.icon"></i>
                            </div>
                        </div>
                        <div class="col col-stats">
                            <div class="numbers">
                                <p class="card-category">{{ card.title }}</p>
                                <h4 class="card-title">{{ card.value }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik Login -->
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="card-title">Aktivitas Login (7 Hari)</h4>
                </div>
                <div class="card-body">
                    <apexchart
                        height="300"
                        type="area"
                        :options="loginOptions"
                        :series="loginSeries"
                    />
                </div>
            </div>
        </div>

        <!-- Distribusi Nilai -->
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="card-title">Distribusi Nilai</h4>
                </div>
                <div class="card-body">
                    <apexchart
                        height="300"
                        type="donut"
                        :options="gradeOptions"
                        :series="gradeSeries"
                    />
                </div>
            </div>
        </div>

        <!-- Log Aktivitas -->
        <div class="col-lg-12 mt-3">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4 class="card-title">Log Aktivitas Terbaru</h4>
                </div>
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Mahasiswa</th>
                                <th>Aksi</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="log in logs" :key="log.id">
                                <td>{{ log.student }}</td>
                                <td>{{ log.action }}</td>
                                <td>{{ log.time }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            statCards: [
                { title: "Mahasiswa Aktif", value: 0, icon: "fas fa-users" },
                { title: "Kelas Berjalan", value: 0, icon: "fas fa-book" },
                { title: "Akses Materi", value: 0, icon: "fas fa-folder-open" },
                { title: "Submit Tugas", value: 0, icon: "fas fa-file-upload" },
            ],

            loginSeries: [{ name: "Login", data: [] }],
            loginOptions: { xaxis: { categories: [] } },

            gradeSeries: [],
            gradeOptions: {},

            logs: [],
        };
    },

    mounted() {
        axios.get("/api/dashboard/analytics").then((res) => {
            const d = res.data;

            // Stats
            this.statCards[0].value = d.stats.total_students;
            this.statCards[1].value = d.stats.total_courses;
            this.statCards[2].value = d.stats.material_access_today;
            this.statCards[3].value = d.stats.total_submissions;

            // Chart Login
            this.loginSeries[0].data = d.logins.values;
            this.loginOptions.xaxis.categories = d.logins.labels;

            // Chart Nilai
            this.gradeSeries = d.grades.series;
            this.gradeOptions = { labels: d.grades.labels };

            // Log
            this.logs = d.logs;
        });
    },
};
</script>

<style scoped>
.card-stats .icon-big i {
    font-size: 32px;
}
.card-stats .numbers .card-title {
    font-size: 22px;
}
</style>
