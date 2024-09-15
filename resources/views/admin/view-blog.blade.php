@extends('admin.admin-main')

@section('admin-main-container')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <div><a href="{{ route('add-img') }}" class="btn btn-primary">Add</a></div>
            <div>
                <form action="{{ route('view-blog') }}" method="GET">
                    <div class="input-group">
                        <div class="form-outline" data-mdb-input-init>
                            <input type="search" name="blog_search" value="{{ $searched_title }}" id="form1" class="form-control" />
                            <label class="form-label" for="form1">Search</label>
                        </div>
                        <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
                            <i class="fas fa-search"></i>
                        </button>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-bordered" id="blog_table">
        <thead>
            <tr>
                <th>Serial No.</th>
                <th>Image</th>
                <th>Image Title</th>
                <th>Action</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Row -->
            @foreach ($images as $key => $img)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td><img src="{{ asset('images/' . $img->image) }}" alt="Image" class="img-thumbnail"
                            style="width: 100px;"></td>
                    <td>{{ $img->title }}</td>
                    <td>
                        <a href="{{ route('blog-edit', $img->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('blog-delete', $img->id) }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    <td>{{ $img->date }}</td>
                </tr>
            @endforeach

            <!-- Repeat rows as needed -->
        </tbody>
    </table>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- Initialize DataTable -->
    <script>
            $('#blog_table').DataTable();
    </script>
@endsection
