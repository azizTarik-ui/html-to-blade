@extends('admin.admin-main')
@section('admin-main-container')



<div class="container mt-5">

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route ('add-img') }}" class="btn btn-primary">Add</a>
    </div>

    <table class="table table-bordered">
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
            @foreach ($images as $key=>$img)
                <tr>
                <td>{{++$key}}</td>
                <td><img src="{{ asset('storage/images/' . $img->image) }}" alt="Image" class="img-thumbnail" style="width: 100px;"></td>
                <td>{{ $img->title }}</td>
                <td>
                    <a href="#edit" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#delete" class="btn btn-danger btn-sm">Delete</a>
                </td>
                <td>{{ $img->date }}</td>
            </tr>
            @endforeach

            <!-- Repeat rows as needed -->
        </tbody>
    </table>
</div>

@endsection
