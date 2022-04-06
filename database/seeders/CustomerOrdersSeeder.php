<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CustomerOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = rand(2022, 2022);
        $month = rand(3, 12);
        $day = rand(1, 28);
        $date = Carbon::create($year,$month ,$day , 0, 0, 0);
        \App\Models\CustomerOrders::factory(10)->create();
        \App\Models\CustomerOrders::insert([
            'name'=>"Macbook",
            'address'=>"Kastamonu",
            'productID'=>"7",
            'customerID'=>"10",
            'quantity'=>"25",
            'shippingDate'=> $date->addWeeks(rand(1, 52))->format('Y-m-d H:i:s'),
            ]);
    }
    
}
