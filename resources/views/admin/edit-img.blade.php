@extends('admin.admin-main')
@section('admin-main-container')
    <div class="container mt-5">
        <h2>Edit Image</h2>
        <form action="{{ route('blog-update', $images->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control" name="image" value="{{ $images->image }}" required>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $images->image }}">
            </div>
            <td><img src="{{ asset('images/' . $images->image) }}" alt="Image" class="img-thumbnail"
                    style="width: 100px;">
            </td>
            <div class="mb-3">
                <label for="title" class="form-label">Image Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $images->title }}""
                    required>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" value="{{ date('Y-m-d') }}" value="{{ $images->date }}"
                    id="date" name="date" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
