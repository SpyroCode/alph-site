@extends('layouts.app')

@section('template_title')
    Create Website Info
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Create Website Info</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('website-info.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('website-info.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('website-info.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
