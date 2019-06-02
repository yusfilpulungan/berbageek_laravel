<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TradersController extends Controller
{
    public function index()
    {
   	    $traders = DB::table('traders')->get();
        return view('traders/index',['traders' => $traders]);
    }
}
