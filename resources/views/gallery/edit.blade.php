@extends('layouts.app')

@section('template_title')
    Update Gallery
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Update Gallery</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('galleries.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('galleries.update', $gallery->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('gallery.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
