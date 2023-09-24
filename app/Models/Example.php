<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    public function customer_food_example()
    {
        return $this->hasMany(CustomerFood::class, 'example_id');
    }
}