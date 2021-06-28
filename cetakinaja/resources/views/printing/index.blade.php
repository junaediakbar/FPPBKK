@extends('printing.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Printing</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('printing.create') }}"> Create New Printing</a>
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
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>NO Telp</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->P_nama }}</td>
            <td>{{ $value->P_email }}</td>
            <td>{{ $value->P_alamat }}</td>
            <td>{{ $value->P_notelp }}</td>
            <td>
                <form action="{{ route('printing.destroy',$value->P_id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('printing.show',$value->P_id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('printing.edit',$value->P_id) }}">Edit</a>   
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