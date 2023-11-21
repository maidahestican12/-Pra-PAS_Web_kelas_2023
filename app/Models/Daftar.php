<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_peserta',
        'nama_event',
        'nama_peserta',
        'email',
        'tanggal_pendaftaran'
   ];
}
