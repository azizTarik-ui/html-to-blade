@extends('admin.admin-main')
@section('admin-main-container')
    <div class="container mt-5">
        <h2>Add New Sub-Category</h2>
        <form action="{{ route('store_sub_category') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- @php
                $alphabets = ['a', 'b', 'c', 'd', 'e'];
            @endphp --}}

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
                <input type="text" name="name" class="form-control">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script>
        $('#category_id').on('change', function() {
            var category_id = $(this).val();
            alert(category_id);
        })
    </script> --}}
@endsection
