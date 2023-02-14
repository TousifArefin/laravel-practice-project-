@extends('admin.admin_master')

@section('admin_content')

    <div class="py-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">Edit Category</h4>
                       </div>
                       <div class="card-body">
                           <form action="{{ route('update.category',$category->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="category_name" value="{{ $category->category_name}}">
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
