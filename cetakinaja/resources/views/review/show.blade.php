@extends('thirdpayment.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Review</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('review.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Skor:</strong>
                {{ $review->R_skor }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi</strong>
                {{ $review->R_deskripsi }}
            </div>
        </div>
    </div>
@endsection