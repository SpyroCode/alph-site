@extends('layouts.app')

@section('template_title')
    {{ $websiteInfo->name ?? 'Show Website Info' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Website Info</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('website-info.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Index:</strong>
                            {{ $websiteInfo->index }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $websiteInfo->address }}
                        </div>
                        <div class="form-group">
                            <strong>Phone 1:</strong>
                            {{ $websiteInfo->phone_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Phone 2:</strong>
                            {{ $websiteInfo->phone_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Location:</strong>
                            {{ $websiteInfo->location }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $websiteInfo->email }}
                        </div>
                        <div class="form-group">
                            <strong>Is Active:</strong>
                            {{ $websiteInfo->is_active }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
