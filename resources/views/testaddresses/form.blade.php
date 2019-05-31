<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Home Address:</strong>
            {!! Form::text('home_address', null, array('placeholder' => 'Home Address','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Office Address:</strong>
            {!! Form::textarea('office_address', null, array('placeholder' => 'Office Address','class' => 'form-control','style'=>'height:150px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
