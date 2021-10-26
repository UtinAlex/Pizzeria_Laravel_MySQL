<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Receipt;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $recept_number_ink = 1; 

        for ($i = 1; $i <= 50; $i++) {
            Receipt::create([
            'recept_number' => $recept_number_ink,
            'pizza_id' => rand(1, 3),
            'roll_id' => 1,
            'quantity' => rand(1, 5),
                     
        ]);

        $recept_number_ink++;

        Receipt::create([
            'recept_number' => $recept_number_ink,            
            'roll_id' => 1,
            'quantity' => rand(1, 5),
                      
        ]);

        }
    }
}