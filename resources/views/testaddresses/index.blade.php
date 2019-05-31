@extends('testaddresses.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>testaddress</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('testaddresses.create') }}"> Add New Address</a>
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
            <th>Home Address</th>
            <th>Office Address</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($testaddresses as $testaddress)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $testaddress->home_address}}</td>
        <td>{{ $testaddress->office_address}}</td>        
        <td>
            <a class="btn btn-info" href="{{ route('testaddresses.show',$testaddress->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('testaddresses.edit',$testaddress->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['testaddresses.destroy', $testaddress->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $testaddresses->links() !!}
@endsection
