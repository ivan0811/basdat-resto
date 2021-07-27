<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = ['pegawai_id', 'total_harga', 'pajak', 'bayar'];
    
    public function detailTransaksi()
    {
        return $this->hasMany(detailTransaksi::class);
    }
    
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
