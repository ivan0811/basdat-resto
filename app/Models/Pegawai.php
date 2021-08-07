<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $fillable = ['nama', 'user_id', 'alamat', 'no_telp', 'jk', 'foto'];
        
    public function user()
    {
        return $this->belongsTo(User::class);        
    }    
    
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
