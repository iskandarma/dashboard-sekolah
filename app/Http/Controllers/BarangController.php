<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::with('kategori')->get();
        // dd($barangs);
        return view('inventaris/barang/index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view ('barang.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
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

        // Cara 1
        // $barang = new Barang;
        // $barang->nama_barang = $request->name;
        // $barang->id_userlevel = $request->user;
        // $barang->id_kategori = $request->category;
        // $barang->stok = $request->stock;
        // $barang->pendanaan = $request->funding;
        // $barang->tahun = $request->year;
        // $barang->harga = $request->price;
        // $barang->deskripsi = $request->desc;
        // $barang->save();

        // Cara 2 : mass assignment
        // Barang::create([
        //     'nama_barang' => $request->name,
        //     'id_userlevel' => $request->user,
        //     'id_kategori' => $request->category,
        //     'stok' => $request->stock,
        //     'pendanaan' => $request->funding,
        //     'tahun' => $request->year,
        //     'harga' => $request->price,
        //     'deskripsi' => $request->desc,
        // ]);
        // $barang->save();

        // Cara 3 : quick mass assigment
        // Syarat -> field tabel dan nama inputan di html harus sama
        // Barang::create($request->all());

        // Cara 4 : gabungan 
        $barang = new Barang([
            'nama_barang' => $request->name,
            'id_kategori' => $request->category,
            'stok' => $request->stock,
            'pendanaan' => $request->funding,
            'tahun' => $request->year,
            'harga' => $request->price,
            'deskripsi' => $request->desc
        ]);
        $barang->id_userlevel = $request->user;
        $barang->save();

        return redirect('barangs')->with('status', 'Barang berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        // $barang = Barang::find($id);
        // $barang = Barang::where('id',$id)->get();
        // $barang->makeHidden('updated_at');
        // return $barang;
        return view('barang/show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $barangs = DB::table('barangs')->where('id', $id)->first();
        return view('barang.edit', compact('barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:2',
            'category' => 'required',
            'stock' => 'required',
            'funding' => 'required',
            'year' => 'required',
            'desc' => 'required'
            
        ],[
            'name.required' => 'Nama Barang harus diisi',
            'name.min' => 'Nama Barang minimal harus 2 karakter',
            'desc.required' => 'Keterangan harus diisi', 
            'category.required' => 'Kategori harus diisi', 
            'stock.required' => 'Stok harus diisi', 
            'funding.required' => 'Pendanaan harus diisi', 
            'year.required' => 'Tahun harus diisi' 
        ]);

        DB::table('barangs')->where('id', $id)->update([
            'nama_barang' => $request->name,
            'id_kategori' => $request->category,
            'stok' => $request->stock,
            'pendanaan' => $request->funding,
            'tahun' => $request->year,
            'harga' => $request->price,
            'deskripsi' => $request->desc
        ]);
        return redirect('barangs')->with('status', 'Barang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('barangs')->where('id', $id)->delete();
        return redirect('barangs')->with('status', 'Barang berhasil dihapus!');
    }

    public function getjumlahbarang(string $id)
    {
        $barang = Barang::select('stok')->where('id',$id)->first();
        return $barang;
    }
}
