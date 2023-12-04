<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanKonsul extends Model
{
    use HasFactory;
    protected $table = 'pesan_konsul';
    protected $primaryKey = 'idkonsul';
    protected $fillable = ['NRP', 'NamaMhs', 'Alamat', 'IDDosen', 'IPK', 'JenisKelamin'];
    // public function dosenWali()
    // {
    //     return $this->belongsTo(Dosen::class, 'IDDosen');
    // }
}