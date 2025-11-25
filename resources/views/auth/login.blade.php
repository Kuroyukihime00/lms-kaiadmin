<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - LMS KaiAdmin</title>

    <!-- Kaiadmin CSS -->
    <link rel="stylesheet" href="{{ asset('kaiadmin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('kaiadmin/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('kaiadmin/css/kaiadmin.min.css') }}">

    <!-- FIX Floating Label -->
    <style>
        /* Override Kaiadmin: pastikan label tetap terlihat */
        .form-floating-label label.placeholder {
            color: #555 !important;
            opacity: 1 !important;
        }

        /* Saat input fokus */
        .form-floating-label input:focus + label.placeholder {
            top: -20px !important;
            color: #1572e8 !important;
            font-size: 13px !important;
            opacity: 1 !important;
        }

        /* Saat input terisi */
        .form-floating-label input:not(:placeholder-shown) + label.placeholder {
            top: -20px !important;
            color: #444 !important;
            font-size: 13px !important;
            opacity: 1 !important;
        }

        /* Warna input text */
        .form-control {
            color: #222 !important;
        }

        /* Placeholder HTML */
        .form-control::placeholder {
            color: transparent !important; /* harus transparan agar floating label berfungsi */
        }
    </style>
</head>

<body class="login page">
<div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
        <h3 class="text-center mb-4">Sign In to Your Account</h3>

        @if ($errors->has('loginError'))
            <div class="alert alert-danger text-center">
                {{ $errors->first('loginError') }}
            </div>
        @endif
        
        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <!-- EMAIL -->
            <div class="form-group">
                <label class="text-dark fw-bold">Email</label>
                <input id="email" name="email" type="email"
                    class="form-control"
                    placeholder="Masukkan email"
                    required>
            </div>

            <!-- PASSWORD -->
            <div class="form-group mt-4">
                <label class="text-dark fw-bold">Password</label>
                <input id="password" name="password" type="password"
                    class="form-control"
                    placeholder="Masukkan password"
                    required>
            </div>

            <div class="form-action mt-5">
                <button class="btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('kaiadmin/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('kaiadmin/js/core/bootstrap.min.js') }}"></script>
</body>
</html>
