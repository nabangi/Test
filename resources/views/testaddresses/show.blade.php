@extends('testaddresses.layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Address</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('testaddresses.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Home Address:</strong>
                {{ $testaddress->home_address}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Office address:</strong>
                {{ $testaddress->office_address}}
            </div>
        </div>
    </div>
@endsection
