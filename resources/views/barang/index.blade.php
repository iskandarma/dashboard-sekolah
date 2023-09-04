@extends('layout/main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Barang</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Barang</a></li>
                        <li class="active">Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')    
    <div class="content mt-3">
    
        <div class="animated fadeIn">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Barang</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('barangs/create') }}" class="btn btn-success btn-sm">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Dibuat Oleh</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item -> nama_barang }}</td>
                                    <td>{{ $item -> deskripsi }}</td>
                                    <td>{{ $item -> stok }}</td>
                                    <td>{{ $item -> kategori->desc }}</td>
                                    <td>{{ $item -> userlevel->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ url("barangs/$item->id") }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>    
                                        <a href="{{ url("barangs/edit/$item->id") }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>    
                                        <form action="{{ url('barangs/'.$item->id) }}" class="d-inline" method="POST" onsubmit="return confirm('Yakin mau hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>    
                                        </form>    
                                    </td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>

    </div>
@endsection
