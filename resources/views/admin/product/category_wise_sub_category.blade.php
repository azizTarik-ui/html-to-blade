@if (!empty($sub_categories))
    @foreach ($sub_categories as $sub_category)
        <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
    @endforeach
@endif
