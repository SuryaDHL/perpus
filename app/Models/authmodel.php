<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authmodel extends Model
{
    //use HasFactory;

    protected $table = 'penggunas';
    protected $fillable = ['username', 'password'];
}
