<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\ActivityLog;

class AnalyticsController extends Controller
{
    public function index()
    {
        $total_students = User::where('role', 'student')->count();
        $total_lecturers = User::where('role', 'lecturer')->count();
        $active_users = ActivityLog::distinct('user_id')->count('user_id');
        $total_logs = ActivityLog::count();

        return view('admin.analytics', compact(
            'total_students',
            'total_lecturers',
            'active_users',
            'total_logs'
        ));
    }
}
