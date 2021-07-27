<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuah extends Model
{
    use HasFactory;
    protected $table = 'kuah';
    protected $fillable = ['nama'];
    
    public function kuahDetail()
    {
        return $this->hasMany(KuahDetail::class);
    }
}
