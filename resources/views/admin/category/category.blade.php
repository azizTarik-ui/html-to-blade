@extends('admin.admin-main')

@section('admin-main-container')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <div><a href="{{ route('add_category') }}" class="btn btn-primary">Add</a></div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category_import_modal">
                    Import Data
                </button>

                <!-- Modal -->

            </div>
        </div>
        <table class="table table-bordered" id="category_table">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Category Name</th>
                    <th>Remarks</th>
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
                        <td>{{ $category->remarks }}</td>
                        <td class="{{ $category->status == 1 ? 'text-primary' : 'text-danger' }}">
                            @if ($category->status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit_category', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('delete_category', $category->id) }}"
                                onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

                <!-- Repeat rows as needed -->
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="category_import_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close bg-dark" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('import_category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <label class="form-label">Demo File</label>
                        <a class="btn btn-primary" href="{{ asset('category_sample.csv') }}" role="button">Download</a>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Upload .xlsx/.csv files only</label>
                            <input type="file" name="file" class="form-control" name="excel" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
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
