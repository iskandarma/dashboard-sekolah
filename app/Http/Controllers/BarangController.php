<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        // return $barangs;
        return view('barang/index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'user' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'funding' => 'required',
            'year' => 'required',
            'desc' => 'required'
            
        ],[
            'name.required' => 'Nama Barang harus diisi',
            'name.min' => 'Nama Barang minimal harus 2 karakter',
            'user.required' => 'User harus diisi',
            'desc.required' => 'Keterangan harus diisi', 
            'category.required' => 'Kategori harus diisi', 
            'stock.required' => 'Stok harus diisi', 
            'funding.required' => 'Pendanaan harus diisi', 
            'year.required' => 'Tahun harus diisi' 
        ]);

        DB::table('barangs')->insert([
            'nama_barang' => $request->name,
            'id_userlevel' => $request->user,
            'id_kategori' => $request->category,
            'stok' => $request->stock,
            'pendanaan' => $request->funding,
            'tahun' => $request->year,
            'harga' => $request->price,
            'deskripsi' => $request->desc
        ]);
        return redirect('barangs')->with('status', 'Barang berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
