@extends('admin.admin-main')
@section('admin-main-container')


    <div class="container mt-5">
        <h2>Edit Sale</h2>


        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('sale.update', $sale->id) }}" method="POST">
            @method('put')
            @csrf

            <div class="mb-3">
                <label>Product Name</label>
                <select name = "product_id" class="form-control">
                    @if (!@empty($products))
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label>Customer Name</label>
                <select name = "customer_id" class="form-control">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" value="{{ $sale->quantity }}" name="quantity" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" value="{{ $sale->price }}" name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('purchase.index') }}" class="btn btn-primary">Cancel</a>
        </form>
    </div>
@endsection
