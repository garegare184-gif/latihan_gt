<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $fillable = ['username', 'name', 'alamat', 'email', 'password'];


}
