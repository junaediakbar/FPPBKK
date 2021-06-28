<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Printing;
use App\Repositories\PrintingRepository;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\API\BaseController as BaseController;

class PrintingController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $printingRepository;

    public function __construct(PrintingRepository $printingRepository)
    {
        $this->printingRepository = $printingRepository;
    }

    public function index()
    {
        $printing=$this->printingRepository->all();
        return $this->sendResponse($printing, 'All Printing Retrived Successfully');
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
            'P_nama' => 'required',
            'P_email' => 'required',
            'P_alamat' => 'required',
            'P_notelp' => 'required',

        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $thirdpayment = Printing::create($input);
   
        return $this->sendResponse($thirdpayment, 'Printing created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return $this->printingRepository->findById($id); 
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
            'P_nama' => 'required',
            'P_email' => 'required',
            'P_alamat' => 'required',
            'P_notelp' => 'required',
        ]);
        return $this->printingRepository->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->printingRepository->delete($id);
    }
}
