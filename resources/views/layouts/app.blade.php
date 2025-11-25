<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>KaiAdmin</title>

    <link rel="stylesheet" href="/kaiadmin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/kaiadmin/css/kaiadmin.min.css">

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

<div class="wrapper">

    {{-- Sidebar berdasarkan role --}}
    @if(Auth::user()->role === 'admin')
        @include('partials.sidebar-admin')
    @endif

    @if(Auth::user()->role === 'student')
        @include('partials.sidebar-student')
    @endif

    @if(Auth::user()->role === 'lecturer')
        @include('partials.sidebar-lecturer')
    @endif

    <div class="main-panel">
        <div class="content">
            @yield('content')
        </div>
    </div>

</div>

<script src="/kaiadmin/js/core/jquery-3.7.1.min.js"></script>
<script src="/kaiadmin/js/core/bootstrap.min.js"></script>
<script src="/kaiadmin/js/kaiadmin.min.js"></script>
</body>
</html>
