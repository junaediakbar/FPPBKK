<?php

namespace App\Http\Controllers;
use App\Models\Review;


use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function add()
    {
    	return view('addreview');
    }

    public function create(Request $request)
    {
    	$review = new Review();
    	$review->R_id = $request->R_id;
      $review->R_skor = $request->R_skor;
      $review->R_deskripsi = $request->R_deskripsi;
    	$review->user_id = auth()->user()->id;
    	$review->save();
    	return redirect('/listreview');
    }
    function show(){

        $data= Review::all();
        return view('viewreview', ['reviews'=>$data]);
    }
}