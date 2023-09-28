<?php

namespace App\Http\Controllers;

use App\Models\Submit;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view ('submit.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = Barang::select('stok')->where('id',$request->id_barang)->first()->stok;
        if ($request->inputjumlah <= $barang) {
            //insert
        } else {
            // Popup error
        }
        dd($request->all());
        // dd($barang);
    }

    /**
     * Display the specified resource.
     */
    public function show(Submit $submit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Submit $submit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Submit $submit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Submit $submit)
    {
        //
    }
}
