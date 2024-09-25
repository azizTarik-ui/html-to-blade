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
            <div><a href="{{ route('sale.create') }}" class="btn btn-primary">Add</a></div>
            <div>

            </div>
        </div>
        <table class="table table-bordered" id="sale_table">
            <thead>
                <tr>
                    <th>Serial No.</th>
                    <th>Name</th>
                    <th>Customer Name</th>
                    <th>Quantity</th>
                    <th>Price per Product</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Row -->
                @foreach ($sales as $key => $sale)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $sale->product->name ?? '' }}</td>
                        <td>{{ $sale->customer->name ?? ''}}</td>
                        <td>{{ $sale->quantity }}</td>
                        <td>{{ $sale->price }}</td>
                        <td>{{ $sale->price * $sale->quantity }}</td>
                        <td>
                            <div class="btn-group" style="column-gap: 4px;">
                                <a href="{{ route('sale.edit', $sale->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('sale.destroy', $sale->id) }}" method="POST"
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
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><strong>Grand Total Price</strong></td>
                    <td id="grandTotalPrice"></td>
                    <td></td>
                </tr>
            </tfoot>


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
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#sale_table').DataTable();

            // Calculate grand total price
            function calculateGrandTotal() {
                let grandTotal = 0;

                // Loop through each row in the DataTable
                table.rows().every(function() {
                    var data = this.data();
                    var price = parseFloat(data[5]); // Price column index

                    // Add to grand total
                    grandTotal += price;
                });

                // Update the grand total in the footer
                $('#grandTotalPrice').text('$' + grandTotal.toFixed(2));
            }

            // Call the function to calculate the grand total
            calculateGrandTotal();
        });
    </script>
@endsection
