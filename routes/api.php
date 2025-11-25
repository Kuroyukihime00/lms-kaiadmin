<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard/analytics', function () {
    return [
        "stats" => [
            "total_students" => 540,
            "total_courses" => 24,
            "material_access_today" => 187,
            "total_submissions" => 91,
        ],
        "logins" => [
            "labels" => ["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],
            "values" => [34,42,51,63,71,80,92],
        ],
        "grades" => [
            "labels" => ["A","B","C","D","E"],
            "series" => [40, 60, 30, 15, 2]
        ],
        "logs" => [
            ["id"=>1,"student"=>"Budi","action"=>"Mengakses materi IoT","time"=>"09:23"],
            ["id"=>2,"student"=>"Sari","action"=>"Submit tugas Web","time"=>"10:05"],
        ]
    ];
});
