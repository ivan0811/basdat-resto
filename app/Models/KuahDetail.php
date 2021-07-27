<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KuahDetail extends Model
{
    use HasFactory;
    protected $table = 'kuah_detail';
    protected $fillable = ['kuah_id', 'detail_id'];
    
    public function kuah()
    {
        return $this->belongsTo(Kuah::class);        
    }
    
    public function detailTransaksi()
    {
        return $this->belongsTo(DetailTransaksi::class);
    }
}
