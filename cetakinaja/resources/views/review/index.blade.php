@extends('review.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Review</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('review.create') }}"> Create New Review</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Skor</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ \Str::limit($value->R_skor, 100) }}</td>
            <td>{{ $value->R_deskripsi }}</td>
            <td>
                <form action="{{ route('review.destroy',$value->R_id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('review.show',$value->R_id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('review.edit',$value->R_id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection