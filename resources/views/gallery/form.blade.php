<div class="box box-info padding-1">
    <div class="box-body">

{{--        <div class="form-group">--}}
{{--            {{ Form::label('index') }}--}}
{{--            {{ Form::text('index', $gallery->index, ['class' => 'form-control' . ($errors->has('index') ? ' is-invalid' : ''), 'placeholder' => 'Index']) }}--}}
{{--            {!! $errors->first('index', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $gallery->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
{{--        <div class="form-group">--}}
{{--            {{ Form::label('image') }}--}}
{{--            {{ Form::text('image', $gallery->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}--}}
{{--            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}
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
{{--            {{ Form::text('icon', $gallery->icon, ['class' => 'form-control' . ($errors->has('icon') ? ' is-invalid' : ''), 'placeholder' => 'Icon']) }}--}}
{{--            {!! $errors->first('icon', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            {{ Form::label('is_active') }}--}}
{{--            {{ Form::text('is_active', $gallery->is_active, ['class' => 'form-control' . ($errors->has('is_active') ? ' is-invalid' : ''), 'placeholder' => 'Is Active']) }}--}}
{{--            {!! $errors->first('is_active', '<div class="invalid-feedback">:message</div>') !!}--}}
{{--        </div>--}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
