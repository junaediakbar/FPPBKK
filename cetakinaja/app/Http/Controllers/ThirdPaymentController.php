<?php

namespace App\Http\Controllers;

use App\Models\ThirdPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Repositories\ThirdPaymentRepository;

class ThirdPaymentController extends Controller
{
    private $thirdpaymentRepository;

    public function __construct(ThirdPaymentRepository $thirdpaymentRepository)
    {
        $this->thirdpaymentRepository = $thirdpaymentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = ThirdPayment::paginate(6);
        $data = $this->thirdpaymentRepository->all();
        return view('thirdpayment.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('thirdpayment.create');
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
            'T_nama' => 'required',
            'T_nomor' => 'required',
        ]);

        ThirdPayment::create([
            'T_nama' => $data['T_nama'],
            'T_nomor' => $data['T_nomor'],
        ]);

        return redirect()->route('thirdpayment.index')->with('success','3rd Payment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThirdPayment  $thirdpayment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // $data = ThirdPayment::find($id);
         $thirdpayment= $this->thirdpaymentRepository->findById($id);  
         return view('thirdpayment.show', compact('thirdpayment'));
     }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThirdPayment  $thirdpayment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thirdpayment= $this->thirdpaymentRepository->findById($id);    
        return view('thirdpayment.edit', compact('thirdpayment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ThirdPayment  $thirdpayment
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $data = request()->validate([
            'T_nama' => 'required',
            'T_nomor' => 'required',
        ]);

        $this->thirdpaymentRepository->update($id, $request->all());

        return redirect('/thirdpayment')->with('success', 'Jasa Pembayaran telah diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThirdPayment  $thirdpayment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $thirdpayment = ThirdPayment::find($id);
        // $thirdpayment->delete();
        $this->thirdpaymentRepository->delete($id);
        return redirect('/thirdpayment')->with('success', 'Jasa Pembayaran dihapus');
    }
}