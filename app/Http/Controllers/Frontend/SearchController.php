<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $images = Admin::all();
        $search_blog = $request->title_search ?? "";
        if($request->title_search)
        {
            $images = Admin::where('title', 'like', "%$request->title_search%",)->get();
        }
        else
        {
            $images = Admin::get();
        }
        return view ('frontend.search', compact('images', 'search_blog'));
    }
}
