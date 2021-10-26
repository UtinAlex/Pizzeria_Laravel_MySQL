<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Roll;

class RollSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $type_roll_seeder = ['classic'];        

        foreach ($type_roll_seeder as $element) {
        Roll::create([
            'type_roll' => $element,
            'price' => rand(10000, 80000),            
        ]);
        }
    }
}