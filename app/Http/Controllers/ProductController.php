<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('admin.product.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::get();
        $data['sub_categories'] = SubCategory::get();
        // return $data;
        return view('admin.product.add-product', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = new Product();
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->name = $request->name;
        $data->price = $request->price;
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
        $data['sub_categories'] = SubCategory::get();
        $data['products'] = Product::find($id);
        return view('admin.product.edit_product', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $data = Product::find($id);
        $data->category_id = $request->category_id;
        $data->sub_category_id = $request->sub_category_id;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->save();
        return redirect()->route('product_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return back()->with('error', 'Deleted.');
    }

    public function catWiseSubCat(Request $request)
    {
        $data['sub_categories'] = SubCategory::where('category_id', $request->category_id)->get();
        return view('admin.product.category_wise_sub_category',$data);
    }


    public function product_report()
    {
        $data['categories'] = Category::get();
        $data['sub_categories'] = SubCategory::get();
        $data['products'] = Product::get();
        return view('admin.product.product_report', $data);
    }

    public function subWiseProduct(Request $request)
    {
        // return 'hi';
        $data['products'] = Product::where('sub_category_id', $request->sub_category_id)->get();
        // return $data['products'];
        return view('admin.product.sub_category_wise_product', $data);
    }

}
