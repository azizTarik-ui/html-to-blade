@extends('admin.admin-main')
@section('admin-main-container')


    <div class="container mt-5">
        <h2>Add New Supplier</h2>


        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('supplier.index') }}" class="btn btn-primary">Cancel</a>
        </form>
        
    </div>
@endsection
