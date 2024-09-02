<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasTu extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'password', 'nama_petugas', 'level'];
    protected $table = 'petugas_tu';
}
