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
            "brand"         => $this -> faker -> words(3,true),
            "type"          => $this -> faker -> words(2,true),
            "price"         => $this -> faker -> randomfloat(2,100,1000),
            "energy"        => $this -> faker -> word(),
            "power"         => $this -> faker -> numberBetween(10,600),
            "release_date"  => $this -> faker -> date(),
            "weight"        => $this -> faker -> numberBetween(800,3000),
            "thumbnail"     => $this -> faker -> imageUrl(1024,768,null,true)
        ];
    }
}
