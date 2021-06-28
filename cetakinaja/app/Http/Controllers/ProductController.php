<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
   private $productRepository;

   public function __construct(ProductRepository $productRepository)
   {
       $this->productRepository = $productRepository;
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       // $data = Product::paginate(6);
       $data = $this->productRepository->all();
       return view('product.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
           return view('product.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       $data = request()->validate([
           'Pr_id' => 'required',
           'Pr_nama' => 'required',
           'Pr_harga' => 'required',
           'Pr_satuan' => 'required',
       ]);

       Product::create([
           'Pr_id' => $data['Pr_id'],
           'Pr_nama' => $data['Pr_nama'],
           'Pr_harga' => $data['Pr_harga'],
           'Pr_satuan' => $data['Pr_satuan'],
       ]);

       return redirect()->route('product.index')->with('success','Product created successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
        // $data = Product::find($id);
        $product= $this->productRepository->findById($id);  
        return view('product.show', compact('product'));
    }

   
   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $product= $this->productRepository->findById($id);    
       return view('product.edit', compact('product'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function update($id, Request $request)
   {
       $data = request()->validate([
         'Pr_id' => 'required',
         'Pr_nama' => 'required',
         'Pr_harga' => 'required',
         'Pr_satuan' => 'required',
       ]);

       $this->productRepository->update($id, $request->all());

       return redirect('/product')->with('success', 'Produk telah diupdate.');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Product  $product
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       // $product = Product::find($id);
       // $product->delete();
       $this->productRepository->delete($id);
       return redirect('/product')->with('success', 'Produk dihapus');
   }
   
}
