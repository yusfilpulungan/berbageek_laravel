<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TradersController extends Controller
{
    public function index()
    {
           $traders = DB::table('traders')
           ->select('traders.id', 'traders.name', 'markets.name as markets')
           ->join('markets', 'traders.id_market', '=', 'markets.id')
           ->get();
        return view('traders/index',['traders' => $traders]);
    }

    public function add()
    {
        $markets = DB::table('markets')->get();
        return view('traders/add', ['markets'=>$markets]);
    }

    public function save(Request $request)
    {
        DB::table('traders')->insert([
            'name' => $request->name,
            'id_market' => $request->id_market,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/traders');
    }

    public function edit($id)
    {
        $traders = DB::table('traders')->where('id',$id)->get();
        $markets = DB::table('markets')->get();
        return view('traders/edit',['traders' => $traders, 'markets'=>$markets]);
    
    }

    public function update(Request $request)
    {
        DB::table('traders')->where('id',$request->id)->update([
            'name' => $request->name,
            'id_market' => $request->id_market,
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/traders');
    }

    public function delete($id)
    {
        DB::table('traders')->where('id',$id)->delete();
        return redirect('/traders');
    }
}
