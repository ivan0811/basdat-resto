<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use App\Models\Kuah;
use App\Models\KuahDetail;
use App\Models\Level;

class TransaksiController extends Controller
{   
    public function show(){
        $transaksi = Transaksi::all();
        return view('kasir.riwayat', compact('transaksi'));
    }

    public function create(){
        
    }    

    public function store(Request $req){
        $pegawai_id = $req->user()->pegawai[0]->id;              
        $transaksi = Transaksi::select('kd_transaksi')->orderByDesc('kd_transaksi')->first();
        $kd_transaksi = 'tr';  
        if($transaksi != null){
            $tempKd_transaksi = (int)substr($transaksi->kd_transaksi, 2);
            $tempKd_transaksi += 1;
            if(strlen(strval($tempKd_transaksi)) == 1){
                $tempKd_transaksi = '000'.strval($tempKd_transaksi);
            }else if(strlen(strval($tempKd_transaksi)) == 2){
                $tempKd_transaksi = '00'.strval($tempKd_transaksi);
            }else if(strlen(strval($tempKd_transaksi)) == 3){
                $tempKd_transaksi = '0'.strval($tempKd_transaksi);
            }else{
                $tempKd_transaksi = strval($tempKd_transaksi);
            }
            $kd_transaksi .= $tempKd_transaksi++;                   
        }else{
            $kd_transaksi = 'tr00001';
        }

        $transaksi = new Transaksi();
        $transaksi->kd_transaksi = $kd_transaksi;
        $transaksi->pegawai_id = $pegawai_id;
        $transaksi->total_harga = $req->_total_harga;
        $transaksi->bayar = $req->nominal_bayar;
        $transaksi->pajak = 0;
        $transaksi->save();

        foreach ($req->menu_id as $key => $value) {                        
            $detailTransaksi = new DetailTransaksi();
            $detailTransaksi->kd_transaksi = $kd_transaksi;
            $detailTransaksi->menu_id = $value;            
            $detailTransaksi->qty = $req->qty[$key];
            $detailTransaksi->save();                               

            if(array_key_exists($value, $req->level)){
                foreach ($req->level[$value] as $key1 => $item) {
                    Level::create([
                        'detail_id' => $detailTransaksi->id,
                        'level' => (int)$item
                    ]);
                }
            }       
            
            if(array_key_exists($value, $req->level)){
                foreach ($req->kuah[$value] as $key1 => $item) {
                    KuahDetail::create([
                        'kuah_id' => $item,
                        'detail_id' => $detailTransaksi->id,
                    ]);
                }
            }       
        }
        
        return redirect()->back()->with('kembalian', ($req->nominal_bayar - $req->_total_harga));      
    }

    public function edit($id){
        
    }

    public function update(Request $req, $id){
     
    }

    public function destroy($id){
        
    }
}
