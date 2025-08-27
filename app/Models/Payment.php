<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    // protected $fillable = ['user_id','category_id','status','method','payment_date'];

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    protected $fillable = ['user_id', 'periode', 'nominal', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}