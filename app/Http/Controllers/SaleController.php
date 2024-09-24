<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['sales'] = Sale::get();
        $data['customer'] = Customer::get();
        return view('admin.sale.sale', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['products'] = Product::get();
        $data['customers'] = Customer::get();
        return view('admin.sale.add_sale', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Sale::create($data);
        // return redirect()->route('role.index');
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
        $data['products'] = Product::get();
        $data['customers'] = Customer::get();
        $data['sale'] = Sale::find($id);
        return view('admin.sale.edit_sale', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $sale = Sale::find($id);

        $sale->update($data);
        return redirect()->route('sale.index');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sale::find($id)->delete();
        return back()->with('error', 'Deleted.');
    }
}
