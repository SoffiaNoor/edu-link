<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';

    protected $primaryKey = 'idmurid';
    protected $fillable = ['namamurid', 'namasekolah','gender', 'tanggallahir','kelas','fotomurid','idbidang', 'user_id'];

    
    public function bidang()
    {
        return $this->belongsTo(Bidang::class, 'idbidang');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
