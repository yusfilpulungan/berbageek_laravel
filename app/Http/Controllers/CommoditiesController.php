<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommoditiesController extends Controller
{
    public function index()
    {
   	    $commodities = DB::table('commodities')->get();
        return view('commodities/index',['commodities' => $commodities]);
    }

    public function prices()
    {
   	    $prices = DB::table('commodity_prices')->get();
        return view('commodities/prices',['prices' => $prices]);
    }

    public function types()
    {
   	    $types = DB::table('commodity_types')->get();
        return view('commodities/types',['types' => $types]);
    }
}
