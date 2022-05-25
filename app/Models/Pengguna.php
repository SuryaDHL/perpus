<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'penggunas';
    Protected $fillable = [
        'nis',
        'fullname',
        'username',
        'password',
        'kelas',
        'alamat'
    ];

}
