@extends('admin.admin-main')
@section('admin-main-container')
    <div class="container mt-5">
        <h2>Add New Sub-Category</h2>
        <form action="{{ route('store_product') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- @php
                $alphabets = ['a', 'b', 'c', 'd', 'e'];
            @endphp --}}

            <div class="mb-3">
                <label>Category *</label>
                <select name = "category_id" id="category_id" class="form-control selectpicker"
                    data-live-search="true" required>
                    <option value="">Select One</option>
                    @if (!@empty($categories))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3 sub_cat_div" style="display: none;">
                <label>Sub-Category</label>
                <select name = "sub_category_id" id="sub_category_id" class="form-control">
                    @if (!@empty($sub_categories))
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>


            <div class="mb-3">
                <label class="form-label">Name *</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Price *</label>
                <input type="text" name="price" class="form-control">
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
    <script>
        $('#category_id').on('change', function() {
            var category_id = $(this).val();

            $.ajax({
                type: 'get',
                url: '{{ URL::to('category_wise_sub_category_ajax') }}',
                data: {
                    category_id: category_id,
                },
                success: function(response) {
                    $('.sub_cat_div').show();
                    $('#sub_category_id').html(response);
                    // console.log(response);
                },
            });
        })
    </script>
@endsection
