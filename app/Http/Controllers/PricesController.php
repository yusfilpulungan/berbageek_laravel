<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricesController extends Controller
{
    public function index()
    {
   	    $prices = DB::table('commodity_prices')->get();
        return view('prices/index',['prices' => $prices]);
    }
}
