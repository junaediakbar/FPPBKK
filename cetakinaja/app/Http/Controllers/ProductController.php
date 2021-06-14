<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('penjual');
    }
    public function add()
    {
       return view('addproduct');
    }

    public function create(Request $request)
    {
       $product = new Product();
       $product->Pr_id = $request->Pr_id;
       $product->Pr_nama = $request->Pr_nama;
       $product->Pr_harga = $request->Pr_harga;
       $product->Pr_satuan = $request->Pr_satuan;
       $product->save();
       return redirect('/listproduct'); 
    }
    function show(){
       
       $data= Product::all();
       return view('viewproduct', ['products'=>$data]);
    }
}
