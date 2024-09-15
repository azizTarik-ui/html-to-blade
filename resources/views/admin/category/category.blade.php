@extends('admin.admin-main')

@section('admin-main-container')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <div><a href="{{ route('add_category') }}" class="btn btn-primary">Add</a></div>
            <div>

            </div>
        </div>
        <table class="table table-bordered" id="category_table">
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Row -->
            @foreach ($categories as $key => $category)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td class="{{ $category->status == 1 ? 'text-primary' : 'text-danger' }}">
                        @if($category->status == 1)
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('edit_category', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('delete_category', $category->id) }}" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delete</a>
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
            $('#category_table').DataTable();
    </script>

@endsection
