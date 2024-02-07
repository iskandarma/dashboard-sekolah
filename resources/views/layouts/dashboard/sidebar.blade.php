<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        @if (auth()->user()->hasRole('user'))
            <li class="nav-item">
                <a class="nav-link " href="{{ url('home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-people"></i>
                    <span>PKL</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasRole('guru'))
            <li class="nav-item">
                <a class="nav-link " href="{{ url('home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{ url('manajemen') }}">
                    <i class="bi bi-person"></i>
                    <span>Manajemen Siswa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-people"></i>
                    <span>PKL</span>
                </a>
            </li>
        @endif
        @if (auth()->user()->hasRole('admin'))
            <li class="nav-item">
                <a class="nav-link " href="{{ url('home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link collapsed" href="{{ url('manajemen') }}">
                    <i class="bi bi-person"></i>
                    <span>Manajemen Siswa</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-cart3"></i>
                    <span>Inventaris</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-people"></i>
                    <span>PKL</span>
                </a>
            </li>
        @endif
    </ul>

</aside>
