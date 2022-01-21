<?php

namespace Database\Factories;
use Carbon\Carbon;
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
        $year = rand(2021, 2022);
        $month = rand(1, 12);
        $day = rand(1, 28);

        $date = Carbon::create($year,$month ,$day , 0, 0, 0);

        return [
            'name'=>$this->faker->sentence(rand(3,7)),
            'address'=>$this->faker->sentence(rand(3,10)),
            'productID'=>$this->faker->numberBetween($min = 1, $max = 10),
            'customerID'=>$this->faker->numberBetween($min = 1, $max = 10),
            'quantity'=>$this->faker->numberBetween($min = 20, $max = 100),
            'shippingDate'=> $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),

        ];
    }
}
