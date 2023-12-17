<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanKursus extends Model
{
    use HasFactory;
    protected $table = 'pesan_kursus';

    protected $primaryKey = 'idkursus';

    protected $fillable = ["idmurid", "idmapel", "idmentor", "idbidang", "jadwal", "via", "harga", "status", "buktibayar"];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'idbidang');
    }

    public function murid()
    {
        return $this->belongsTo(Murid::class, 'idmurid');
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'idmapel');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'idmentor');
    }
}
