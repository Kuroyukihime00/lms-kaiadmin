<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Panel</title>

    <!-- Tambahkan CSS kamu di sini -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Admin Panel</h2>
        <ul>
            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li><a href="/admin/students">Students</a></li>
            <li><a href="/admin/activity-log">Activity Log</a></li>
            <li><a href="/admin/classes">Classes</a></li>
            <li><a href="/admin/analytics">Analytics</a></li>
        </ul>
    </aside>

    <!-- Konten -->
    <main class="content">
        <h1>@yield('page-title')</h1>

        @yield('content')
    </main>

</body>
</html>
