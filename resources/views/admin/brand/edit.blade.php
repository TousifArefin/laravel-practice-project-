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
                           <form action="{{ route('update.brand',$brands->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Brand Name</label>
                                <input type="text" class="form-control" name="brand_name" value="{{ $brands->brand_name}}">
                                @error('brand_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Brand Image</label>
                                <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
                                <input type="file" class="form-control" name="brand_image" value="{{ $brands->brand_image }}">
                                @error('brand_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img src="{{ asset($brands->brand_image)}}" alt="" style="height: 50px; width:80px">
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
