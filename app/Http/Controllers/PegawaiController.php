<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function show(){
        $user = User::all();     
        return view('admin.pegawai', compact('user'));
    }

    public function create(){
        
    }

    public function store(Request $req){
        $user = new User();
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->role = $req->role;
        $user->save();
        
        Pegawai::create([
            'user_id' => $user->id,
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'no_telp' => $req->no_telp,
            'jk' => $req->jk,            
        ]);        
    }

    public function edit($id){
        $user = User::findOrFail($id);    
    }

    public function update(Request $req, $id){
        $user = User::findOrFail($id);
        $user->username = $req->username;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->role = $req->role;
        $user->pegawai->nama = $req->nama;
        $user->pegawai->alamat = $req->alamat;
        $user->pegawai->no_telp = $req->no_telp;
        $user->pegawai->jk = $req->jk;
        $user->save();
    }

    public function destroy($id){
        User::findOrFail($id)->delete();
    }
}
