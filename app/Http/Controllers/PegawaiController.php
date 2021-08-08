<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pegawai;
use Validator;

class PegawaiController extends Controller
{
    public function show(){
        $user = User::all();     
        return view('admin.pegawai', compact('user'));
    }

    public function create(){
        
    }

    public function store(Request $req){       
        $req->validate([
            'username' => 'required|unique:users|max:20',            
            'password' => 'required|min:8',
            'email' => 'required|email',
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'alamat' => 'required'
        ]);

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

        return redirect()->back();
    }

    public function update(Request $req, $id){
        $req->validate([            
            'password' => 'nullable|min:8',
            'email' => 'required|email',
            'nama' => 'required',
            'no_telp' => 'required|numeric',
            'alamat' => 'required'
        ]);
        
        $user = User::findOrFail($id);
        $user->username = $req->username;
        if($req->password){
            $user->password = Hash::make($req->password);
        }        
        $user->email = $req->email;
        $user->role = $req->role;        
        $user->save();

        Pegawai::where('user_id', $id)
        ->update([
            'nama' => $req->nama,
            'alamat' => $req->alamat,
            'no_telp' => $req->no_telp,
            'jk' => $req->jk
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        User::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function showProfile(){

    }

    public function updateProfile(){
        
    }
}
