@extends('layouts.app')

@section('template_title')
    Website Info
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Website Info') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
										<th>Address</th>
										<th>Phone 1</th>
										<th>Phone 2</th>
										<th>Location</th>
										<th>Email</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($websiteInfos as $websiteInfo)
                                        <tr>
											<td>{{ $websiteInfo->address }}</td>
											<td>{{ $websiteInfo->phone_1 }}</td>
											<td>{{ $websiteInfo->phone_2 }}</td>
											<td>{{ $websiteInfo->location }}</td>
											<td>{{ $websiteInfo->email }}</td>

                                            <td>
                                                <form action="{{ route('website-info.destroy',$websiteInfo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('website-info.show',$websiteInfo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('website-info.edit',$websiteInfo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $websiteInfos->links() !!}
            </div>
        </div>
    </div>
@endsection
