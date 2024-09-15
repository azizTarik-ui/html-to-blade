<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::get();
        return view('admin.sub-category.sub-category', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.sub-category.add-sub-category', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = new SubCategory();
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['categories'] = Category::get();
        $data['sub_categories'] = SubCategory::find($id);
        return view('admin.sub-category.edit-sub-category', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = SubCategory::find($id);
        $data->category_id = $request->category_id;
        $data->name = $request->name;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('sub_category_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SubCategory::find($id)->delete();
        return back()->with('error','Deleted.');
    }
}
