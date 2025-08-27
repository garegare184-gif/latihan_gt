<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name','username','password','level'];
    protected $hidden = ['password','remember_token'];

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}