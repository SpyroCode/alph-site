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

                             <div class="float-right">
                                <a href="{{ route('website-info.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>No</th>

										<th>Index</th>
										<th>Address</th>
										<th>Phone 1</th>
										<th>Phone 2</th>
										<th>Location</th>
										<th>Email</th>
										<th>Is Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($websiteInfos as $websiteInfo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $websiteInfo->index }}</td>
											<td>{{ $websiteInfo->address }}</td>
											<td>{{ $websiteInfo->phone_1 }}</td>
											<td>{{ $websiteInfo->phone_2 }}</td>
											<td>{{ $websiteInfo->location }}</td>
											<td>{{ $websiteInfo->email }}</td>
											<td>{{ $websiteInfo->is_active }}</td>

                                            <td>
                                                <form action="{{ route('website-info.destroy',$websiteInfo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('website-info.show',$websiteInfo->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('website-info.edit',$websiteInfo->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
