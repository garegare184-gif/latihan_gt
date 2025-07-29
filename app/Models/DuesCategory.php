<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuesCategory extends Model
{
    public function duesMembers()
    {
        return $this->hasMany(DuesMember::class, 'idduescategory');
    }
}
