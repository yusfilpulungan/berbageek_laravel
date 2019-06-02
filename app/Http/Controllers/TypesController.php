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

    public function add()
    {
        return view('types/add');
    }

    public function save(Request $request)
    {
        DB::table('commodity_types')->insert([
            'name' => $request->name,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/types');
    }

    public function edit($id)
    {
        $types = DB::table('commodity_types')->where('id',$id)->get();
        return view('types/edit',['types' => $types]);
    
    }

    public function update(Request $request)
    {
        DB::table('commodity_types')->where('id',$request->id)->update([
            'name' => $request->name,
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return redirect('/types');
    }

    public function delete($id)
    {
        DB::table('commodity_types')->where('id',$id)->delete();
        return redirect('/types');
    }
}
