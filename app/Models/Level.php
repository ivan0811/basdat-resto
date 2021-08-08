<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $table = 'level';
    protected $fillable = ['detail_id', 'level'];
    
    public function detailTransaksi()
    {
        return $this->belongsTo(DetailTransaksi::class);
    }
}
