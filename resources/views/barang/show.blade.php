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
                        <li><a href="#">Data</a></li>
                        <li class="active">Detail</li>
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
                        <strong>Detail Barang</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('barangs') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                   <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>
                                            Nama
                                        </th>
                                        <td>
                                            {{ $barang->nama_barang }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Kategori
                                        </th>
                                        <td>
                                            {{ $barang->kategori->desc }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Created By
                                        </th>
                                        <td>
                                            {{ $barang->userlevel->name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Stok
                                        </th>
                                        <td>
                                            {{ $barang->stok }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Pendanaan
                                        </th>
                                        <td>
                                            {{ $barang->pendanaan }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Tahun
                                        </th>
                                        <td>
                                            {{ $barang->tahun }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Harga
                                        </th>
                                        <td>
                                            {{ $barang->harga }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Deskripsi
                                        </th>
                                        <td>
                                            {{ $barang->deskripsi }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Created At
                                        </th>
                                        <td>
                                            {{ $barang->created_at }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Updated At
                                        </th>
                                        <td>
                                            {{ $barang->updated_at }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                   </div>
                </div>
            </div>

            
        </div>

    </div>
@endsection
