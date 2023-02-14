@extends('admin.admin_master')

@section('admin_content')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('success')}}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                    @endif
                   <div class="card">
                    <div class="card-header">

                        <h4 class="card-title">All Slider<a href="{{route('add.slider')}}" class="btn btn-primary float-right">Add Slider</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <th>SL</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $key=>$slider )
                                    <tr>
                                        <td>{{ $key+1}}</td>
                                        <td>{{ $slider->title}}</td>
                                        <td>{{ $slider->description}}</td>
                                        <td><img src="{{ asset($slider->image)}}" alt="" style="height: 50px; width:80px"></td>
                                        <td>
                                            <a href="{{ route('edit.slider',$slider->id)}}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('delete.slider',$slider->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                   </div>
                    {{-- {{ $categories->links() }} --}}
                </div>

            </div>
        </div>
    </div>
@endsection
