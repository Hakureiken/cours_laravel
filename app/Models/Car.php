<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    // permet de lier une voiture à une marque et à un type (modèle)
    public function brand() {
        return $this -> BelongsTo(Brand::class);
    }

    public function type() {
        return $this -> BelongsTo(Type::class);
    }
}
