<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PricesController extends Controller
{
    public function index()
    {
        $prices = DB::table('commodity_prices')
        ->select('commodity_prices.id', 'commodities.name as commodity', 'traders.name as trader', 'users.name as operator', 'date', 'price')
        ->join('commodities', 'commodities.id', '=', 'commodity_prices.id_commodities')
        ->join('traders', 'traders.id', '=', 'commodity_prices.id_trader')
        ->join('users', 'users.id', '=', 'commodity_prices.id_operator')
        ->get();
        return view('prices/index',['prices' => $prices]);
    }

    public function add()
    {
        $commodities=DB::table('commodities')->get();
        $traders=DB::table('traders')->get();
        return view('prices/add', ['commodities'=>$commodities, 'traders'=>$traders]);
    }

    public function save(Request $request)
    {
        DB::table('commodity_prices')->insert([
            'id_commodities' => $request->id_commodities,
            'id_trader' => $request->id_trader,
            'id_operator' => Auth::id(),
            'date' => $request->date,
            'price' => $request->price,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/prices');
    }

    public function edit($id)
    {
        $commodities=DB::table('commodities')->get();
        $traders=DB::table('traders')->get();
        $prices = DB::table('commodity_prices')->where('id',$id)->get();
        return view('prices/edit',['prices'=>$prices, 'commodities'=>$commodities, 'traders'=>$traders]);
    
    }

    public function update(Request $request)
    {
        DB::table('commodity_prices')->where('id',$request->id)->update([
            'id_commodities' => $request->id_commodities,
            'id_trader' => $request->id_trader,
            'id_operator' => Auth::id(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/prices');
    }

    public function delete($id)
    {
        DB::table('commodity_prices')->where('id',$id)->delete();
        return redirect('/prices');
    }
}
