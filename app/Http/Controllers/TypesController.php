<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypesController extends Controller
{
    public function index()
    {
   	    $types = DB::table('commodity_types')->get();
        return view('types/index',['types' => $types]);
    }
}
