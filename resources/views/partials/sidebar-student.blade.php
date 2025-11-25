<div class="sidebar" data-background-color="dark">
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                <!-- Dashboard -->
                <li class="nav-item {{ request()->is('student/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/student/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Kelas Saya -->
                <li class="nav-item {{ request()->is('student/classes*') ? 'active' : '' }}">
                    <a href="{{ url('/student/classes') }}">
                        <i class="fas fa-book"></i>
                        <p>Kelas Saya</p>
                    </a>
                </li>

                <!-- Tugas -->
                <li class="nav-item {{ request()->is('student/assignments*') ? 'active' : '' }}">
                    <a href="{{ url('/student/assignments') }}">
                        <i class="fas fa-tasks"></i>
                        <p>Tugas</p>
                    </a>
                </li>

                <!-- Nilai -->
                <li class="nav-item {{ request()->is('student/grades*') ? 'active' : '' }}">
                    <a href="{{ url('/student/grades') }}">
                        <i class="fas fa-star"></i>
                        <p>Nilai</p>
                    </a>
                </li>

                <!-- Profil -->
                <li class="nav-item {{ request()->is('student/profile') ? 'active' : '' }}">
                    <a href="{{ url('/student/profile') }}">
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
