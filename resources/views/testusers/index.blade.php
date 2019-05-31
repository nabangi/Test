@extends('testusers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Test Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('testusers.create') }}"> Create New Test User</a>
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
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($testusers as $testuser)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $testuser->name }}</td>
            <td>{{ $testuser->phone }}</td>
            <td>{{ $testuser->email }}</td>
            <td>
                <form action="{{ route('testusers.destroy',$testuser->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('testusers.show',$testuser->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('testusers.edit',$testuser->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $testusers->links() !!}
      @endsection
