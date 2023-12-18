<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';
    protected $primaryKey = 'id';
    protected $fillable = ['namakonsul','harga', 'deskripsi'];
}
