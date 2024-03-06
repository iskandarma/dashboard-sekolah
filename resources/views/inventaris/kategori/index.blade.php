@extends('layouts/dashboard/main')
@section('content')
    

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manajemen Kategori</h1>
        <nav>
            <div class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Kategori</li>
                </ol>
                @if (auth()->user()->hasRole('admin'))
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createKategori">+ Tambah Kategori</button>
                @endif
            </div>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-15">
                <div class="row">


                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="card-body">
                                <h5 class="card-title">Daftar Kategori</h5>

                                <!-- Default Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kategoris as $val)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $val->name }}</td>
                                            <td>
                                                <form action="" method="">
                                                    @csrf
                                                    <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                                    {{-- @if (auth()->user()->hasRole('admin')) --}}
                                                        <button class="btn btn-danger"><i
                                                                class="bi bi-trash"></i></button>
                                                    {{-- @endif --}}
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Default Table Example -->
                            </div>
                        </div>

                    </div><!-- End Customers Card -->
                </div>
    </section>

<!-- Modal -->
<div class="modal fade" id="createKategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kategori</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                
            </form>
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="email" class="form-control" id="nama_kategori" name="nama_kategori">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success">Buat</button>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection