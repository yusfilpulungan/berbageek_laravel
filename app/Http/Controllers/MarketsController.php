<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketsController extends Controller
{
    public function index()
    {
   	    $markets = DB::table('markets')->get();
        return view('markets/index',['markets' => $markets]);
    }
}
