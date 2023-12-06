<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';

    // Specify the primary key column name
    protected $primaryKey = 'idmurid';
    protected $fillable = ['namamurid', 'namasekolah','gender', 'tanggallahir','kelas','fotomurid','idbidang'];

    
    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'idbidang');
    }

}
