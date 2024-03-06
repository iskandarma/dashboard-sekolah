@extends('layouts/dashboard/main')
@section('content')
    

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manajemen Barang</h1>
        <nav>
            <div class="d-flex justify-content-between">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Barang</li>
                </ol>
                @if (auth()->user()->hasRole('admin'))
                    <button type="submit" class="btn btn-primary">+ Tambah Barang</button>
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
                                <h5 class="card-title">Daftar Barang</h5>

                                <!-- Default Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Peminjam</th>
                                            <th scope="col">Barang Dipinjam</th>
                                            <th scope="col">Kategori Barang</th>
                                            <th scope="col">Status Peminjaman</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($record as $val)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $val->user->name }}</td>
                                            <td>{{ $val->barang->nama_barang }}</td>
                                            <td>{{ $val->barang->kategori->name }}</td>
                                            <td>{{ $val->statusbarang->name }}</td>
                                            <td>
                                                <form action="" method="">
                                                    @csrf
                                                    <a class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                                    @if (auth()->user()->hasRole('admin'))
                                                        <button class="btn btn-danger"><i
                                                                class="bi bi-trash"></i></button>
                                                    @endif
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

</main>
@endsection