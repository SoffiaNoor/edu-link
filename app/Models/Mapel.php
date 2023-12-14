<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';

    protected $primaryKey = 'idmp';
    protected $fillable = ['namamapel', 'idbidang', 'gambar', 'deskripsi','harga'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'idbidang');
    }
}

