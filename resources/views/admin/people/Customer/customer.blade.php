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
            <div><a href="{{ route('customer.create') }}" class="btn btn-primary">Add</a></div>

            <div>

            </div>
        </div>
        <table class="table table-bordered" id="customer_table">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>



                <!-- Example Row -->
                @foreach ($customers as $key => $customer)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $customer->name }}</td>

                        <td>
                            <div class="btn-group justify-content-evenly">
                                <div>
                                    <a href="{{ route('customer.edit', $customer->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                </div>
                                <div>

                                </div>
                                <form action="{{ route('customer.destroy', $customer->id) }}" method="POST"
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
        $('#customer_table').DataTable();
    </script>
@endsection
