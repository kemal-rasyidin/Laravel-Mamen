<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikan extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'npm',
        'nama',
        'kelas',
        'kehadiran',
        'la',
        'lp',
        'ujian'
    ];
}