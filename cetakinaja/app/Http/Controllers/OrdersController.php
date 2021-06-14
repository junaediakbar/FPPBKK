<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('pembeli');
    }
    public function add()
    {
    	return view('addorder');
    }

    public function create(Request $request)
    {
    	$order = new Order();
    	$order->N_id = $request->N_id;
    	$order->product_id = $request->L_id;
    	$order->nama_layanan = $request->nama_layanan;
    	$order->harga = $request->harga;
    	$order->user_id = auth()->user()->id;
    	$order->save();
    	return redirect('/listorder'); 
    }
    function show(){
        
        $data= Order::all();
        return view('vieworder', ['orders'=>$data]);
    }
    
}
