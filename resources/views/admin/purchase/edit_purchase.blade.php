@extends('admin.admin-main')
@section('admin-main-container')


    <div class="container mt-5">
        <h2>Edit Purchase</h2>


        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        @endif
        <form action="{{ route('purchase.update', $purchase->id) }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf

            <div class="mb-3">
                <label>Product Name</label>
                <select name = "product_id" class="form-control">
                    @if (!@empty($products))
                    @foreach ($products as $product)
                            {{-- <option value="{{ $product->id }}">{{ $product->name }}</option> --}}
                            <option value="{{ $product->id }}" @if ($purchase->product_id == $product->id) selected @endif>
                             {{ $product->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label>Supplier Name</label>
                <select name = "supplier_id" class="form-control">
                    @foreach ($suppliers as $supplier)
                        {{-- <option value="{{ $supplier->id }}">{{ $supplier->name }}</option> --}}
                        <option value="{{ $supplier->id }}" @if ($purchase->supplier_id == $supplier->id) selected @endif>
                             {{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" value="{{ $purchase->quantity }}" name="quantity" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" value="{{ $purchase->price }}" name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('purchase.index') }}" class="btn btn-primary">Cancel</a>
        </form>

    </div>
@endsection
