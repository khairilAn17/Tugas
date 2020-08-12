<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    public function index(){
        $employee = DB::table("employee")->get();
        // var_dump($employee);die;
        return view("employe", ["employee"=> $employee]);
    }

    public function tambah(){
    
        return view('addem');
    
    }

    public function store(Request $request){
	DB::table('employee')->insert([
		'name' => $request->name,
        'location_code' => $request->location,
        'birth_date' => $request->date,
	]);
	return redirect('/employe');
 
    }

    public function edit($id){
        $employe = DB::table('employee')->where('id',$id)->get();
        return view('editEm',['employe' => $employe]);
    }

    public function update(Request $request){
	    DB::table('employee')->where('id',$request->id)->update([
		'name' => $request->name,
		'location_code' => $request->location,
		'birth_date' => $request->date
	]);
    return redirect('/employe');
    
    }

    public function hapus($id){
	
	DB::table('employee')->where('id',$id)->delete();
		
	return redirect('/employe');
    }

    public function search(){
	
            $employee = DB::select("SELECT * FROM employee WHERE location_code='JKT' AND TIMESTAMPDIFF(YEAR, birth_date, CURDATE()) > 25");
        
            return view("employe", ["employee"=> $employee]);
    }

    public function ulang(){
	
        return view('ulang');
    }
}
