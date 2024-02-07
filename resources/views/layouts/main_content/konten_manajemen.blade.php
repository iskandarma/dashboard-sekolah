@if (Auth::user()->role == 'Admin')
    @include('admin.manajemen_konten.index')
@elseif(Auth::user()->role == 'Guru')
    @include('guru.manajemen_konten.index')
@endif