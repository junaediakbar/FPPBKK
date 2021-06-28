<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\ThirdPayment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Repositories\ThirdPaymentRepository;

class ThirdPaymentController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $thirdpaymentRepository;

    public function __construct(ThirdPaymentRepository $thirdpaymentRepository)
    {
        $this->thirdpaymentRepository = $thirdpaymentRepository;
    }

    public function index()
    {
        $thirdpayment=$this->thirdpaymentRepository->all();
        return $this->sendResponse($thirdpayment, 'All Third Payment Retrived Successfully');
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
            'T_nama' => 'required',
            'T_nomor' => 'required',

        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $thirdpayment = ThirdPayment::create($input);
   
        return $this->sendResponse($thirdpayment, 'ThirdPayment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return $this->thirdpaymentRepository->findById($id); 
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
            'T_nama' => 'required',
            'T_nomor' => 'required',
        ]);
        return $this->thirdpaymentRepository->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->thirdpaymentRepository->delete($id);
    }
}
