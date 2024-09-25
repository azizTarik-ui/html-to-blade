@extends('admin.admin-main')
@section('admin-main-container')
    <div class="container mt-5">
        <h2>Edit Category</h2>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('update_category', $categories->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name *</label>
                <input type="text" name="name" value="{{ $categories->name }}" class="form-control" value="">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" value="{{ $categories->description }}" class="form-control"
                    value="">
            </div>

            <div class="mb-3">
                <label for="status">Status: *</label>
                <select name="status" class="form-control">
                    {{-- <option value="1">Active</option>
                    <option value="0">Inactive</option> --}}
                    @if ($categories->status == 1)
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    @else
                        <option value="0">Inactive</option>
                        <option value="1">Active</option>
                    @endif
                </select>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
