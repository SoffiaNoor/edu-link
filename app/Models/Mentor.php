<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;
    protected $table = 'mentor';

    protected $primaryKey = 'idmentor';

    protected $fillable = ["namamentor", "foto_profil", "pendidikan", "ptn", "idbidang", "twitter", "instagram", "deskripsi"];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'idbidang');
    }
}
