<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    public function cars() {
        return $this -> hasMany(Car::class);
    }

    public function types() {
        return $this -> hasMany(Type::class);
    }
}
