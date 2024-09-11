<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function viewBlog()
    {
        $images = Admin::all();
        return view('admin.view-blog', compact('images'));
    }
    public function addImage()
    {
        return view('admin.add-img');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
        }

        $image = Admin::create([
            'image' => $filename,
            'title' => $request->title,
            'date' => $request->date,
        ]);

        return redirect()->route('add-img');
    }
}
