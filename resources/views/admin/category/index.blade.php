@extends('admin.admin_master')

@section('admin_content')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (session('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                    @endif
                    <table class="table table-bordered table-hover">
                        <thead>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>User</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key=>$category )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>{{ $category->user_id }}</td>
                                    <td>{{ Carbon\Carbon::parse( $category->created_at)->diffForHumans()}}</td>
                                    <td>
                                        <a href="{{ route('edit.category',$category->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('sdelete.category',$category->id) }}" class="btn btn-danger">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }}
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Cateagory</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.category')}}" method="POST">
                              <div class="form-group">
                                @csrf
                                <label>Category Name</label>
                                <input type="text" name="category_name" class="form-control">
                              </div>
                              <input type="submit" name="submit" class=" mt-3 btn btn-primary form-control" value="update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Trash List</h4>
                       </div>
                       <div class="card-body">
                           <table class="table table-bordered table-hover">
                                <thead>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>User</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($trashCat as $key=>$category)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td>{{ $category->user_id }}</td>
                                            <td>{{ Carbon\Carbon::parse( $category->created_at)->diffForHumans() }}</td>
                                            <td>
                                                <a href="{{ route('restore.category',$category->id)}}" class="btn btn-info">Restore</a>
                                                <a href="{{ route('pdelete.category',$category->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                           </table>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
