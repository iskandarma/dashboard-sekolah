@if (Auth::user()->role == 'Admin')
    @include('admin.manajemen_siswa.index')
@elseif(Auth::user()->role == 'Guru')
    @include('guru.manajemen_siswa.index')
@endif