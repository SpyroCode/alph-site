@extends('layouts.app')

@section('template_title')
    {{ $gallery->name ?? 'Show Gallery' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Gallery</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('galleries.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Index:</strong>
                            {{ $gallery->index }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $gallery->name }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            <br/>
                            <td><img src="{{$gallery->image}}" height="160px" width="240px"></td>
                        </div>
                        <div class="form-group">
                            <strong>Is Active:</strong>
                            @if($gallery->is_active == 1)
                                Yes
                            @else
                                No
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
