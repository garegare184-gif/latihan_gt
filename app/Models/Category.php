<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded;

    public function category()
    {
        return $this->hasMany(Payment::class);
    }
}
=======

class Category extends Model
{
    protected $guarded = []; 

}
>>>>>>> bc2ad695c0609d92750c1856b833669eeb3001c0
