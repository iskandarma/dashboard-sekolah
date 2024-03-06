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

            <li class="nav-item" >
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                  <i class="bi bi-cart3"></i><span>Inventaris</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                  <li>
                    <a href="components-alerts.html">
                      <i class="bi bi-circle"></i><span>Kelola Barang</span>
                    </a>
                  </li>
                  <li>
                    <a href="components-alerts.html">
                      <i class="bi bi-circle"></i><span>Kelola Kategori</span>
                    </a>
                  </li>
                  <li>
                    <a href="components-alerts.html">
                      <i class="bi bi-circle"></i><span>Riwayat Peminjaman</span>
                    </a>
                  </li>
                  <li>
                    <a href="components-alerts.html">
                      <i class="bi bi-circle"></i><span>Riwayat Pengembalian</span>
                    </a>
                  </li>
                </ul>
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
