@extends('layouts.app')

@section('template_title')
    Gallery
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Gallery') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('galleries.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Name</th>
										<th>Image</th>
										<th>Icon</th>
										<th>Is Active</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($galleries as $gallery)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $gallery->index }}</td>
											<td>{{ $gallery->name }}</td>
                                            <td><img src="{{$gallery->image}}" height="20px" width="20px"></td>
                                            <td><i class="{{$gallery->icon}}"></i></td>
                                            @if($gallery->is_active == 1)
                                                <td>Yes</td>
                                            @else
                                                <td>No</td>
                                            @endif

                                            <td>
                                                <form action="{{ route('galleries.destroy',$gallery->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('galleries.show',$gallery->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('galleries.edit',$gallery->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $galleries->links() !!}
            </div>
        </div>
    </div>
@endsection
