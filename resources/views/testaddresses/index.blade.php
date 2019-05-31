@extends('testaddresses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>testaddresses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('testaddresses.create') }}"> Create New testaddress</a>
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
            <td>{{ $testaddress->home_address }}</td>
            <td>{{ $testaddress->office_address }}</td>            
            <td>
                <form action="{{ route('testaddresses.destroy',$testaddress->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('testaddresses.show',$testaddress->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('testaddresses.edit',$testaddress->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $testaddresses->links() !!}
      @endsection
