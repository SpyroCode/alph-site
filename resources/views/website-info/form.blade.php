<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $websiteInfo->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_1') }}
            {{ Form::text('phone_1', $websiteInfo->phone_1, ['class' => 'form-control' . ($errors->has('phone_1') ? ' is-invalid' : ''), 'placeholder' => 'Phone 1']) }}
            {!! $errors->first('phone_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phone_2') }}
            {{ Form::text('phone_2', $websiteInfo->phone_2, ['class' => 'form-control' . ($errors->has('phone_2') ? ' is-invalid' : ''), 'placeholder' => 'Phone 2']) }}
            {!! $errors->first('phone_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location') }}
            {{ Form::text('location', $websiteInfo->location, ['class' => 'form-control' . ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
            {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $websiteInfo->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
