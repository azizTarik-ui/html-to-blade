@extends('admin.admin-main')
@section('admin-main-container')
    <div class="container mt-5">
        <h2>Edit Category</h2>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('update_sub_category', $sub_categories->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Category</label>
                <select name = "category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{  $category->id }}">{{  $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Name *</label>
                <input type="text" value="{{ $sub_categories->name }}" name="name" class="form-control" value="">
            </div>

            <div class="mb-3">
                <label for="status">Status: *</label>
                <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
