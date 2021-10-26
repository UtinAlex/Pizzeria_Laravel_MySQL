<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $type_pizza_seeder = ['cheese', 'sausage', 'mushroom'];        

        foreach ($type_pizza_seeder as $element) {
        Pizza::create([
            'type_pizza' => $element,
            'price' => rand(10000, 60000),            
        ]);
        }
    }
}