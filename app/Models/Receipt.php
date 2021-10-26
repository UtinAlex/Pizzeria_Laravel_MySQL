<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pizza;
use App\Models\Roll;

class Receipt extends Model
{
    use HasFactory;

    protected $table = 'receipts';

    public function getTenLastReceipt() {

       
        $arr = $this->select('receipts.id', 'recept_number', 'pizza_id', 'roll_id', 'quantity',
         'pizzas.type_pizza', 'pizzas.price as pizzas_price',
        'rolls.type_roll', 'rolls.price as roll_price')
        ->leftjoin('pizzas', function ($join) {
            $join->on('receipts.pizza_id', '=', 'pizzas.id');
        })
        ->leftjoin('rolls', function ($join) {
            $join->on('receipts.roll_id', '=', 'rolls.id');
        })
        ->whereNotNull('pizza_id')
        ->whereNotNull('roll_id')
        ->take(10)
        ->get();
             
        return $arr;

    }
}
