<?php

namespace App\Http\Controllers;

use App\Models\Printing;
use Illuminate\Http\Request;

class PrintingsController extends Controller
{
    //
    public function add()
    {
    	return view('addprinting');
    }

    public function create(Request $request)
    {
    	$printing = new Printing();
        $printing->P_id = $request->P_id;
    	$printing->P_nama = $request->P_nama;
    	$printing->P_email = $request->P_email;
    	$printing->P_alamat = $request->P_alamat;
        $printing->P_notelp = $request->P_notelp;
    	$printing->save();
    	return redirect('/listprinting'); 
    }
    function show(){
        
        $data= Printing::all();
        return view('viewprinting', ['printings'=>$data]);
    }
}
