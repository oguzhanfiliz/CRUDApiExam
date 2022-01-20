<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return array(
            'name'=>$this->faker->sentence(rand(3,7)),
            'slug'=>$this->faker->sentence(rand(3,7)),
            'price'=>$this->faker->unique()->randomDigit,
            'description'=>$this->faker->text(200),

        );
    }
}
