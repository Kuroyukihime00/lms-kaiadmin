<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Lecturer\LecturerDashboardController;

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/students', function () {
        return view('admin.students');
    });

    Route::get('/logs', [LogController::class, 'index'])
        ->name('admin.logs')
        ->middleware('auth');

    Route::get('/classes', function () {
        return view('admin.classes');
    });

    Route::get('/analytics', [AnalyticsController::class, 'index'])
        ->name('admin.analytics')
        ->middleware('auth');
});

Route::prefix('student')->group(function () {

    Route::get('/dashboard', [StudentDashboardController::class, 'index'])
        ->name('student.dashboard');

    Route::get('/classes', function () {
        return view('student.classes');
    })->name('student.classes');

    Route::get('/assignments', function () {
        return view('student.assignments');
    })->name('student.assignments');

    Route::get('/grades', function () {
        return view('student.grades');
    })->name('student.grades');

    Route::get('/profile', function () {
        return view('student.profile');
    })->name('student.profile');

});

Route::prefix('lecturer')->group(function () {

    Route::get('/dashboard', [LecturerDashboardController::class, 'index'])
        ->name('lecturer.dashboard');

    Route::get('/classes', function () {
        return view('lecturer.classes');
    })->name('lecturer.classes');

    Route::get('/students', function () {
        return view('lecturer.students');
    })->name('lecturer.students');

    Route::get('/assessments', function () {
        return view('lecturer.assessments');
    })->name('lecturer.assessments');

    Route::get('/profile', function () {
        return view('lecturer.profile');
    })->name('lecturer.profile');

});


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');