<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Repositories\ReviewRepository;

class ReviewController extends Controller
{
    //
    private $reviewRepository;
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('review.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = $this->reviewRepository->all();
      return view('review.index',compact('data'))->with('i', (request()->input('page',1)-1)*5);
    }

    public function __construct(ReviewRepository $reviewRepository)
    {
      $this->reviewRepository = $reviewRepository;
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
            'R_skor' => 'required',
            'R_deskripsi' => 'required',
        ]);

        Review::create([
            'R_skor' => $data['R_skor'],
            'R_deskripsi' => $data['R_deskripsi'],
        ]);

        return redirect()->route('review.index')->with('success','review created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThirdPayment  $thirdpayment
     * @return \Illuminate\Http\Response
     */
    function show(){
      $review= $this->reviewRepository->findById($id);  
      return view('review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThirdPayment  $thirdpayment
     * @return \Illuminate\Http\Response
     */
    function edit(){
      $review= $this->reviewRepository->findById($id);  
      return view('review.edit', compact('review'));
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
            'R_skor' => 'required',
            'R_deskripsi' => 'required',
        ]);

        $this->reviewRepository->update($id, $request->all());

        return redirect('/review')->with('success', 'Review Anda telah diupdate.');
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
        $this->reviewRepository->delete($id);
        return redirect('/review')->with('success', 'Review dihapus');
    }
}