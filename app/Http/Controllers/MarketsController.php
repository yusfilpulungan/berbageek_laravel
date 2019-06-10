<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarketsController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
   	    $markets = DB::table('markets')->get();
        return view('markets/index',['markets' => $markets]);
    }

    public function add()
    {
        return view('markets/add');
    }

    public function save(Request $request)
    {
        DB::table('markets')->insert([
            'name' => $request->name,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/markets');
    }

    public function edit($id)
    {
        $markets = DB::table('markets')->where('id',$id)->get();
        return view('markets/edit',['markets' => $markets]);
    
    }

    public function update(Request $request)
    {
        DB::table('markets')->where('id',$request->id)->update([
            'name' => $request->name,
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/markets');
    }

    public function delete($id)
    {
        DB::table('markets')->where('id',$id)->delete();
        return redirect('/markets');
    }
}
