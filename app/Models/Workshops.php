<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workshops extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'waktu_mulai',
        'waktu_selesai',
        'topik_workshops',
        'fasilitator',
        'lokasi',
   ];
}
