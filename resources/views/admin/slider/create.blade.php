@extends('admin.admin_master')

@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Slider</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.slider')}}" method="POST" enctype="multipart/form-data">
                      <div class="form-group md-4">
                        @csrf
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group md-4">
                        @csrf
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group md-4">
                        @csrf
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
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
@endsection
