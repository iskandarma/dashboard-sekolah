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
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')    
    <div class="content mt-3">
    
        <div class="animated fadeIn">

            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Barang</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('barangs') }}" class="btn btn-secondary btn-sm">
                            <i class="fa fa-undo"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ url('barangs/'.$barangs->id) }}" method="POST">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name',$barangs->nama_barang) }}" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Kategori Barang</label>
                                    <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category',$barangs->id_kategori) }}">
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Stok Barang</label>
                                    <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock',$barangs->stok) }}">
                                    @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Pendanaan</label>
                                    <input type="text" name="funding" class="form-control @error('funding') is-invalid @enderror" value="{{ old('funding',$barangs->pendanaan) }}">
                                    @error('funding')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pendanaan</label>
                                    <input type="number" name="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year',$barangs->tahun) }}">
                                    @error('year')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $barangs->harga) }}">
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="desc" class="form-control @error('desc') is-invalid @enderror">{{ old('desc',$barangs->deskripsi) }}</textarea>
                                    @error('desc')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

    </div>
@endsection
