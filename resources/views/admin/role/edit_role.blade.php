@extends('admin.admin-main')
@section('admin-main-container')


    <div class="container mt-5">
        <h2>Edit Role</h2>


        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('role.update', $role->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" value="{{ $role->name ?? "" }}" name="name" class="form-control">
            </div>


            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $role->description ?? ""}}</textarea>
            </div>

            {{-- <div class="mb-3">
                <label for="status">Power</label>
                <select name="status" class="form-control">
                    <option value="1">Super-Admin</option>
                    <option value="0">Sub-Admin</option>
                </select>
            </div> --}}

            <div class="mb-3">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ $role->status == 1 ? 'Selected' : '' }}>Active</option>
                    <option value="0" {{ $role->status != 1 ? 'Selected' : '' }}>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
