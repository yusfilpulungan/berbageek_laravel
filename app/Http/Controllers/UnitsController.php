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

    public function add()
    {
        return view('units/add');
    }

    public function save(Request $request)
    {
        DB::table('units')->insert([
            'name' => $request->name,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/units');
    }

    public function edit($id)
    {
        $units = DB::table('units')->where('id',$id)->get();
        return view('units/edit',['units' => $units]);
    
    }

    public function update(Request $request)
    {
        DB::table('units')->where('id',$request->id)->update([
            'name' => $request->name,
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/units');
    }

    public function delete($id)
    {
        DB::table('units')->where('id',$id)->delete();
        return redirect('/units');
    }
}
