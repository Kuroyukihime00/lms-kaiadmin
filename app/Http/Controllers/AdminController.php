<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function students() {
        return view('admin.students');
    }

    public function logs() {
        return view('admin.logs');
    }

    public function classes() {
        return view('admin.classes');
    }

    public function analytics() {
        return view('admin.analytics');
    }

    public function activityLog() {
        return view('admin.activity-log');
    }
}
