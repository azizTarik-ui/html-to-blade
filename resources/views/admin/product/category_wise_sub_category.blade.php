@if (!empty($sub_categories) && count($sub_categories) > 0)
    <option value="">Select One</option>
    @foreach ($sub_categories as $sub_category)
        <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
    @endforeach
@else
    <option value="">No Data Found</option>
@endif
