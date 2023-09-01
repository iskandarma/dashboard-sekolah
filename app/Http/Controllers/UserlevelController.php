<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserlevelController extends Controller
{
    public function data(){
        $userlevels = DB::table('userlevels')->get();
        // dd($userlevels);
        // return $userlevels;
        return view('userlevel.data', ['userlevels' => $userlevels]);
    }

    public function add(){
        return view ('userlevel.add');
    }

    public function addProcess(Request $request){

        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required',
        ],[
            'name.required' => 'Nama Level harus diisi',
            'desc.required' => 'Keterangan harus diisi' 
        ]);

        DB::table('userlevels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('userlevels')->with('status', 'User level berhasil ditambah!');
    }

    public function edit($id){
        $userlevel = DB::table('userlevels')->where('id', $id)->first();
        // dd ($userlevel);
        return view('userlevel.edit', compact('userlevel'));
    }

    public function editProcess(Request $request, $id){

        $request->validate([
            'name' => 'required|min:2',
            'desc' => 'required',
        ],[
            'name.required' => 'Nama Level harus diisi',
            'desc.required' => 'Keterangan harus diisi' 
        ]);

        DB::table('userlevels')->where('id', $id)->update([
            'name'=> $request->name,
            'desc'=>$request->desc
        ]);
        return redirect('userlevels')->with('status', 'User level berhasil diupdate!');
    }

    public function delete($id){
        $deleted = DB::table('userlevels')->where('id', $id)->delete();
        return redirect('userlevels')->with('status', 'User level berhasil dihapus!');
    }
    
}
