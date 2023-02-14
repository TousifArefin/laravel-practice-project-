@extends('admin.admin_master')

@section('admin_content')

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Edit Brand</h4>
                       </div>
                       <div class="card-body">
                           <form action="{{ route('update.slider',$sliders->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $sliders->title}}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>description</label>
                                <input type="text" class="form-control" name="description" value="{{ $sliders->description}}">
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="hidden" name="old_img" value="{{ $sliders->image }}">
                                <input type="file" class="form-control" name="image" value="{{ $sliders->image }}">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img src="{{ asset($sliders->image)}}" alt="" style="height: 50px; width:80px">
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Update</button>
                        </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
