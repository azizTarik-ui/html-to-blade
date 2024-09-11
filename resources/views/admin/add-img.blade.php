@extends('admin.admin-main')
@section('admin-main-container')
    <div class="container mt-5">
        <h2>Add New Image</h2>
        <form action="{{ route('store-img') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Image Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" value="{{ date('Y-m-d') }}" id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
