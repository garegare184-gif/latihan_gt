<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'iduser');
    }

    public function officer()
    {
        return $this->belongsTo(Officer::class, 'petugas');
    }
}
