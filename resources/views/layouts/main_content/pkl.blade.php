@if (Auth::user()->role == 'Admin')
    @include('admin.pkl.index')
@elseif(Auth::user()->role == 'Guru')
    @include('guru.pkl.index')
@else
    @include('siswa.pkl.index')
@endif