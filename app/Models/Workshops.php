<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workshops extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_workshops',
        'tanggal',
        'topik_workshops',
        'fasilitator',
        'lokasi',
   ];
}
