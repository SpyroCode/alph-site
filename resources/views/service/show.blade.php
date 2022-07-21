@extends('layouts.app')

@section('template_title')
    {{ $service->name ?? 'Show Service' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Index:</strong>
                            {{ $service->index }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $service->name }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            <br/>
                            <td><img src="{{$service->image}}" height="160px" width="240px"></td>
                        </div>
                        <div class="form-group">
                            <strong>Title:</strong>
                            {{ $service->title }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $service->description }}
                        </div>
                        <div class="form-group">
                            <strong>Is Active:</strong>
                            @if($service->is_active == 1)
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
