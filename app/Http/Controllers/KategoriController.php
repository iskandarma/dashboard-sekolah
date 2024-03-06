<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('inventaris/kategori/index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required',
        ],[
            'name.required' => 'Nama Kategori harus diisi',
            'name.min' => 'Nama Kategori minimal harus 2 karakter',
            'desc.required' => 'Keterangan harus diisi' 
        ]);

        DB::table('kategoris')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('kategoris')->with('status', 'Kategori berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoris = DB::table('kategoris')->where('id', $id)->first();
        return view('kategori.edit', compact('kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required',
        ],[
            'name.required' => 'Nama Kategori harus diisi',
            'name.min' => 'Nama Kategori minimal harus 2 karakter',
            'desc.required' => 'Keterangan harus diisi' 
        ]);

        DB::table('kategoris')->where('id', $id)->update([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('kategoris')->with('status', 'Kategori berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('kategoris')->where('id', $id)->delete();
        return redirect('kategoris')->with('status', 'Kategori berhasil dihapus!');
    }
}
