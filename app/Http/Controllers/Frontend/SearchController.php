<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Details;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view ('frontend.search');
    }
    public function title(Request $request)
    {
        $data = new Details();
        $data->tile = $request->title;
        $data->save();
    }
}
