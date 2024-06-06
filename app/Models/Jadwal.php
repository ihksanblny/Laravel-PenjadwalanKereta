<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwals';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = [
        'kode_tiket',
        'nama_kereta',
        'kelas',
        'tujuan',
        'keberangkatan',
        'tanggal',
        'jam',
    ];

    protected $dates = [
        'tanggal',
        'jam',
    ];
}
