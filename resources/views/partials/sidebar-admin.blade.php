<div class="sidebar" data-background-color="dark">
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">

            <ul class="nav nav-primary">

                <!-- Dashboard -->
                <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ url('/admin/dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Mahasiswa -->
                <li class="nav-item {{ request()->is('admin/students*') || request()->is('admin/logs') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#students">
                        <i class="fas fa-users"></i>
                        <p>Mahasiswa</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse" id="students">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('admin/students') ? 'active' : '' }}">
                                <a href="{{ url('/admin/students') }}">Daftar Mahasiswa</a>
                            </li>

                            <li class="{{ request()->is('admin/logs') ? 'active' : '' }}">
                                <a href="{{ url('/admin/logs') }}">Log Aktivitas</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Kelas -->
                <li class="nav-item {{ request()->is('admin/classes') ? 'active' : '' }}">
                    <a href="{{ url('/admin/classes') }}">
                        <i class="fas fa-book"></i>
                        <p>Kelas</p>
                    </a>
                </li>

                <!-- Analytics -->
                <li class="nav-item {{ request()->is('admin/analytics') ? 'active' : '' }}">
                    <a href="{{ url('/admin/analytics') }}">
                        <i class="fas fa-chart-line"></i>
                        <p>Analytics</p>
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
