@extends('thirdpayment.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Jasa Pembayaran</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('thirdpayment.create') }}"> Create New 3rd Payment</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Nomor Rekening</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->T_nama }}</td>
            <td>{{ \Str::limit($value->T_nomor, 100) }}</td>
            <td>
                <form action="{{ route('thirdpayment.destroy',$value->T_id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('thirdpayment.show',$value->T_id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('thirdpayment.edit',$value->T_id) }}">Edit</a>   
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