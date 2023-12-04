<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';

    // Specify the primary key column name
    protected $primaryKey = 'idmp';
    protected $fillable = ['namamapel', 'idbidang'];

    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'idbidang');
    }
}

