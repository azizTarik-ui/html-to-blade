@extends('admin.admin-main')

@section('admin-main-container')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="d-flex justify-content-between mb-3">
            <div><a href="{{ route('add_product') }}" class="btn btn-primary">Add</a></div>
            <div>

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
                    <th>Status</th>
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
                        <td class="{{ $product->status == 1 ? 'text-primary' : 'text-danger' }}">
                            @if ($product->status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
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
@endsection
