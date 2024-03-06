<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        if(Auth::user()->getKey() == 1){ //cek admin apa bukan
            $record = Peminjaman::with(['user','barang','statusbarang','barang.kategori'])->get();
            return view('inventaris/rwyt_peminjaman/index', compact('record'));
        } else {
            $id=Auth::user()->id;
            $record = Peminjaman::with(['user','barang','statusbarang','barang.kategori'])
            ->where('id_user',$id)
            ->get();
            return view('inventaris/rwyt_peminjaman/index', compact('record'));
        }
        // dd($record[0]->user->name);
        // dd(Auth::user()->getKey());
    }
}
