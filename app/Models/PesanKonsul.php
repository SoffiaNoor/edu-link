<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanKonsul extends Model
{
    use HasFactory;
    protected $table = 'pesan_konsul';
    protected $primaryKey = 'idkonsul';
    protected $fillable = ['idmentor', 'idmurid', 'idprogram', 'status', 'bukti_bayar', 'aktif'];


    public function murid()
    {
        return $this->belongsTo(Murid::class, 'idmurid');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'idmentor');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'idmurid');
    }

    public function program(){
        return $this->belongsTo(Program::class, 'idprogram');
    }
}