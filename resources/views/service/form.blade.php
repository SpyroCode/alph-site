<div class="box box-info padding-1">
    <div class="box-body">

{{--        <div class="form-group">--}}
{{--            {{ Form::label('index') }}--}}
{{--            {{ Form::text('index', $service->index, ['class' => 'form-control' . ($errors->has('index') ? ' is-invalid' : ''), 'placeholder' => 'Index']) }}--}}
{{--            {!! $errors->first('index', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $service->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Image</label>
            <input class="form-control" type="file" name="file" id="formFile" accept="image/*">
            @error('file')
            <br/>
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
{{--        <div class="form-group">--}}
{{--            {{ Form::label('icon') }}--}}
{{--            {{ Form::text('icon', $service->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}--}}
{{--            {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $service->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
{{--        <div class="form-group">--}}
{{--            {{ Form::label('is_active') }}--}}
{{--            {{ Form::text('is_active', $service->is_active, ['class' => 'form-control' . ($errors->has('is_active') ? ' is-invalid' : ''), 'placeholder' => 'Is Active']) }}--}}
{{--            {!! $errors->first('is_active', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
