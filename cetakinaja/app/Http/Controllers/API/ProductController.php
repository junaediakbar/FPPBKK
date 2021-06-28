<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Repositories\ProductRepository;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $product=$this->productRepository->all();
        return $this->sendResponse($product, 'All Product Retrived Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'Pr_id' => 'required',
           'Pr_nama' => 'required',
           'Pr_harga' => 'required',
           'Pr_satuan' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $product = Product::create($input);
   
        return $this->sendResponse($product, 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return $this->productRepository->findById($id); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        return $this->productRepository->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->productRepository->delete($id);
    }
}
