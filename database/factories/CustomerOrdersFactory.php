<?php

namespace Database\Factories;

use App\Models\CustomerOrders;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerOrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerOrders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(rand(3,7)),
            'address'=>$this->faker->sentence(rand(3,10)),
            'productID'=>$this->faker->unique(1,10)->randomDigit(),
            'customerID'=>$this->faker->unique(1,2)->randomDigit(),
            'quantity'=>$this->faker->unique(1,50)->randomDigit(),
            'shippingDate'=> date('Y-m-d', rand(1,54000)),

        ];
    }
}
