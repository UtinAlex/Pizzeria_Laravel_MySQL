<?php

namespace App\Http\Controllers;
use App\Models\Receipt;
use App\Models\Pizza;
use App\Models\Roll;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (Receipt $receipt) {

        $arr = $receipt->getTenLastReceipt();

        return view('home', ['arr' => $arr,]);

    }
}
