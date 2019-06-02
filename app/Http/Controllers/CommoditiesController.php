<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommoditiesController extends Controller
{
    public function index()
    {
           $commodities = DB::table('commodities')
           ->select('commodities.id', 'commodities.name', 'commodity_types.name as type', 'units.name as unit')
           ->join('commodity_types', 'commodities.id_commodities_types', '=', 'commodity_types.id')
           ->join('units', 'commodities.id_units', '=', 'units.id')
           ->get();
        return view('commodities/index',['commodities' => $commodities]);
    }

    public function add()
    {
        $types = DB::table('commodity_types')->get();
        $units = DB::table('units')->get();
        return view('commodities/add', ['types'=>$types, 'units'=>$units]);
    }

    public function save(Request $request)
    {
        DB::table('commodities')->insert([
            'name' => $request->name,
            'id_commodities_types' => $request->id_commodities_types,
            'id_units' => $request->id_units,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/commodities');
    }

    public function edit($id)
    {
        $commodities = DB::table('commodities')->where('id',$id)->get();
        $types = DB::table('commodity_types')->get();
        $units = DB::table('units')->get();
        return view('commodities/edit',['commodities' => $commodities, 'types'=>$types, 'units'=>$units]);
    
    }

    public function update(Request $request)
    {
        DB::table('commodities')->where('id',$request->id)->update([
            'name' => $request->name,
            'id_commodities_types' => $request->id_commodities_types,
            'id_units' => $request->id_units,
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/commodities');
    }

    public function delete($id)
    {
        DB::table('commodities')->where('id',$id)->delete();
        return redirect('/commodities');
    }
}
