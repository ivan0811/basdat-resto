<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{   
    public function show(){
        $transaksi = Transaksi::all();
        return view('kasir.riwayat');
    }

    public function create(){
        
    }

    public function store(Request $req){
       
    }

    public function edit($id){
          
    }

    public function update(Request $req, $id){
     
    }

    public function destroy($id){
        
    }
}
