<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "brand_id"          => $this -> faker -> numberBetween(1,12),
            "type_id"           => $this -> faker -> numberBetween(1,25),
            "price"             => $this -> faker -> randomfloat(2,100,1000),
            "energy"            => $this -> faker -> word(),
            "power"             => $this -> faker -> numberBetween(10,600),
            "release_date"      => $this -> faker -> date(),
            "weight"            => $this -> faker -> numberBetween(800,3000),
            "thumbnail"         => $this -> faker -> imageUrl(1024,768,null,true)
        ];
    }
}
