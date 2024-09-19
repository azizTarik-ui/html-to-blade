@extends('admin.admin-main')

@section('admin-main-container')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <div class="container mt-5">

        <div class="d-flex justify-content-between mb-3">
            <div><a href="{{ route('role.create') }}" class="btn btn-primary">Add</a></div>
            <div>

            </div>
        </div>
        <table class="table table-bordered" id="role_table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- <td>A</td>

                <td>D</td>
                <td>E</td>

                <td>
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" onclick="return confirm('Are You Sure?')" class="btn btn-danger btn-sm">Delete</a>
                </td> --}}
                <!-- Example Row -->
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $role->name ?? '' }}</td>
                        <td>{{ $role->description ?? '' }}</td>
                        <td class="{{ $role->status == 1 ? 'text-primary' : 'text-danger' }}">
                            @if ($role->status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                        </td>


                        <td>
                            <div class="btn-group">
                                <a href="{{ route('role.edit', $role->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('role.destroy', $role->id) }}" method="POST"
                                    onclick="return confirm('Are You Sure?')">
                                    @method('delete')
                                    @csrf
                                    {{-- <input type="hidden" name="id" value="{{ $role->id }}"> --}}
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>

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
        $('#role_table').DataTable();
    </script>
@endsection
