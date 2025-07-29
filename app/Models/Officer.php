<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'petugas');
    }
}

