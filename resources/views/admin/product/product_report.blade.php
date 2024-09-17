@extends('admin.admin-main')

@section('admin-main-container')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="container mt-5">

        <div class="d-flex justify-content-start">

            <div class="mb-3">
                <label>Category</label>
                <select name = "category_id" id="category_id" class="form-control selectpicker bg-primary"
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
                <select name = "sub_category_id" id="sub_category_id" class="form-control" data-live-search="true" required>
                    <option value="">Select One</option>
                    @if (!@empty($sub_categories))
                        @foreach ($sub_categories as $sub_category)
                            <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                        @endforeach
                    @endif

                </select>
            </div>


            <div class="mb-3 product_div" style="display: none;">
                <label>Product</label>
                <select name = "product_id" id="product_id" class="form-control " required>
                    <option value="">Select One</option>
                    @if (!@empty($products))
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

        </div>
        <table class="table table-bordered" id="product_table">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Category</th>
                    <th>Sub-Category</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $product->category->name ?? '' }}</td>
                        <td>{{ $product->sub_category->name ?? '' }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>

                        <td>
                            <a href="{{ route('edit_product', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('delete_product', $product->id) }}" onclick="return confirm('Are You Sure?')"
                                class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

                <!-- Repeat rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- Initialize DataTable -->
    <script>
        $('#product_table').DataTable();
    </script>

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

    <script>
        $('#sub_category_id').on('change', function() {
            var sub_category_id = $(this).val();
            // alert(sub_category_id);
            $.ajax({
                type: 'get',
                url: '{{ URL::to('sub_category_wise_product_ajax') }}',
                data: {
                    sub_category_id: sub_category_id,
                },
                success: function(response) {
                    $('.product_div').show();
                    $('#product_id').html(response);
                    console.log(response);
                },
            });
        })
    </script>

@endsection
