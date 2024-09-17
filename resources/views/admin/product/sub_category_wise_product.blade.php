@if (!empty($products) && count($products) > 0)
    @foreach ($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
    @endforeach
@else
    <option value="">No Data Found</option>
@endif
