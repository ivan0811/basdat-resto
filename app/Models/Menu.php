<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = ['kategori', 'nama', 'harga', 'level', 'kuah'];
    
    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class);
    }
}
