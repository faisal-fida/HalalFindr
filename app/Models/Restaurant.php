<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function foods()
    {
        return $this->hasMany(Food::class, 'restaurant_id');
    }

}