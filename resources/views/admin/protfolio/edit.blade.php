@extends('admin.admin_master')

@section('admin_content')

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Edit Protfolio</h4>
                       </div>
                       <div class="card-body">
                           <form action="{{ route('update.protfolio',$protfolios->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $protfolios->name}}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $protfolios->title}}">
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
                            <div class="form-group">
                                <label>Details</label>
                                <input type="text" class="form-control" name="details" value="{{ $protfolios->details}}">
                                @error('details')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="hidden" name="old_img" value="{{ $protfolios->image }}">
                                <input type="file" class="form-control" name="image" value="{{ $protfolios->image }}">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <img src="{{ asset($protfolios->image)}}" alt="" style="height: 50px; width:80px">
                            </div>
                            <div class="form-group md-4">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control" value="{{ $protfolios->link}}">
                                @error('link')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
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
