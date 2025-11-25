<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LMS KaiAdmin</title>

    {{-- KaiAdmin assets --}}
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/kaiadmin.min.css">

    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="wrapper">

        {{-- Sidebar --}}
        @include('partials.sidebar')

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid" id="app">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/kaiadmin.min.js"></script>
</body>

</html>
