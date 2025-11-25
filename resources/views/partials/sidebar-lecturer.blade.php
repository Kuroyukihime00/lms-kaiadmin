<div class="sidebar" data-background-color="dark">
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                <!-- Dashboard -->
                <li class="nav-item {{ request()->is('lecturer/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/lecturer/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Kelas Diampu -->
                <li class="nav-item {{ request()->is('lecturer/classes*') ? 'active' : '' }}">
                    <a href="{{ url('/lecturer/classes') }}">
                        <i class="fas fa-book-open"></i>
                        <p>Kelas Diampu</p>
                    </a>
                </li>

                <!-- Mahasiswa -->
                <li class="nav-item {{ request()->is('lecturer/students*') ? 'active' : '' }}">
                    <a href="{{ url('/lecturer/students') }}">
                        <i class="fas fa-users"></i>
                        <p>Mahasiswa</p>
                    </a>
                </li>

                <!-- Penilaian -->
                <li class="nav-item {{ request()->is('lecturer/assessments*') ? 'active' : '' }}">
                    <a href="{{ url('/lecturer/assessments') }}">
                        <i class="fas fa-clipboard-check"></i>
                        <p>Penilaian</p>
                    </a>
                </li>

                <!-- Profil -->
                <li class="nav-item {{ request()->is('lecturer/profile') ? 'active' : '' }}">
                    <a href="{{ url('/lecturer/profile') }}">
                        <i class="fas fa-user"></i>
                        <p>Profil</p>
                    </a>
                </li>

            </ul>

            <!-- 🔥 Logout -->
            <div class="mt-4 p-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger w-100">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
