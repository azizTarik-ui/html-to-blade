<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::get();
        return view('admin.purchase.purchase', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['products'] = Product::get();
        $data['suppliers'] = Supplier::get();
        return view('admin.purchase.add_purchase', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Purchase::create($data);
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
        $data['suppliers'] = Supplier::get();
        $data['purchase'] = Purchase::find($id);
        return view('admin.purchase.edit_purchase', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $purchase = Purchase::find($id);

        $purchase->update($data);
        return redirect()->route('purchase.index');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Purchase::find($id)->delete();
        return back()->with('error', 'Deleted.');
    }
}
