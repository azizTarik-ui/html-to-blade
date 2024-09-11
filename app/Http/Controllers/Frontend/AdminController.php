<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
    }
    public function viewBlog(Request $request)
    {
        // return $request;
        $searched_title = $request->blog_search ?? "";
        if ($request->blog_search) {
            $images = Admin::where('title', 'like', "%$request->blog_search%")->get();
        } else {
            $images = Admin::get();
        }
        return view('admin.view-blog', compact('images', 'searched_title'));
    }
    public function addImage()
    {
        return view('admin.add-img');
    }
    public function destroy($id)
    {
        $admin = Admin::find($id);
        File::delete(('images/' . $admin->image));
        $admin->delete();
        return back();
    }
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'title' => 'required|string|max:255',
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

        return redirect()->route('view-blog');
    }

    public function edit($id)
    {
        $images = Admin::find($id);
        return view('admin.edit-img', compact('images'));
    }



    public function update(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'date' => 'required|date',
        ]);

        $data = Admin::find($id);
        $filename =
            $request->image ?? "";
        if ($request->hasFile('image')) {
            File::delete(('images/' . $data->image));
            $file = $request->file('image');
            $filename = date('ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
        }

        $data->image = $filename;
        $data->title = $request->title;
        $data->date = $request->date;
        $data->save();
        return redirect()->route('view-blog');
    }
}
