<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $images = Admin::all();
        return view ('frontend.search', compact('images'));
    }

}
