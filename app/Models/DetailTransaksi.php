<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $table = 'detail_transaksi';
    protected $fillable = ['kd_transaksi', 'menu_id', 'kuah_id', 'qty', 'level'];
    
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
    
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
    
    public function kuahDetail()
    {
        return $this->hasMany(KuahDetail::class);
    }
}
