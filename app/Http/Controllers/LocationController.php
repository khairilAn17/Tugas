<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $location = DB::table("location")->get();
        return view("index", ["location"=> $location]);
    }

    public function tambah(){
    
        return view('addLoc');
    
    }

    public function store(Request $request){
	DB::table('location')->insert([
		'code' => $request->code,
		'name' => $request->name,
	]);
	return redirect('/location');
 
    }

    public function edit($id){
        $location = DB::table('location')->where('id',$id)->get();
        return view('editLoc',['location' => $location]);
    }

    public function update(Request $request){
	    DB::table('location')->where('id',$request->id)->update([
		'code' => $request->code,
		'name' => $request->name,
	]);
    return redirect('/location');
    
    }

    public function hapus($id){
	
	DB::table('location')->where('id',$id)->delete();
		
	return redirect('/location');
    }
}
