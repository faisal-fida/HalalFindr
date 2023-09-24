<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
        'email',
    ];


    public function foods()
    {
        return $this->belongsToMany(Food::class, 'customer_food');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class,'id');
    }
}