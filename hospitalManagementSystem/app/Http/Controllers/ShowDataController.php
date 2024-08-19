<?php

namespace App\Http\Controllers;

use App\Models\Investigation;
use App\Models\Category;
use App\Models\Digonesticsaleinfo;
use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function index()
    {
        $data = Investigation::all();
        $cate = Category::all();
        return view('checkData', compact('data','cate'));
    }

}
