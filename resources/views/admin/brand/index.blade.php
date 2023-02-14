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
                            <th>Brand Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($brands as $key=>$brand )
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $brand->brand_name}}</td>
                                    <td><img src="{{ asset($brand->brand_image)}}" alt="" style="height: 50px; width:80px"></td>
                                    <td>
                                        <a href="{{ route('edit.brand',$brand->id)}}" class="btn btn-primary">Edit</a>
                                        <a href="{{ route('delete.brand',$brand->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- {{ $categories->links() }} --}}
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Brand</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('store.brand')}}" method="POST" enctype="multipart/form-data">
                              <div class="form-group md-4">
                                @csrf
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" class="form-control">
                                @error('brand_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group md-4">
                                @csrf
                                <label>Brand Image</label>
                                <input type="file" name="brand_image" class="form-control">
                                @error('brand_image')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                              <input type="submit" name="submit" class=" mt-3 btn btn-primary form-control" value="update">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
