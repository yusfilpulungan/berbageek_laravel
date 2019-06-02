<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitsController extends Controller
{
    public function index()
    {
   	    $units = DB::table('units')->get();
        return view('units/index',['units' => $units]);
    }
}
