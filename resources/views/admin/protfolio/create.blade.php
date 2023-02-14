@extends('admin.admin_master')

@section('admin_content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Protfolio</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.protfolio')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group md-4">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                      <div class="form-group md-4">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group md-4">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            @foreach ($categories as $category )
                            <option value="{{ $category->id}}">{{ $category->category_name}}</option>
                            @endforeach
                        </select>
                      </div>
                      <div class="form-group md-4">
                        <label>Details</label>
                        <textarea name="details" class="form-control"></textarea>
                        @error('details')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group md-4">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                      <div class="form-group md-4">
                        <label>Link</label>
                        <input type="text" name="link" class="form-control">
                        @error('link')
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
