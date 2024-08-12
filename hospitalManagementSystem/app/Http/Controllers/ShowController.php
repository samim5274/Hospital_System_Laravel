<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Investigation;


class ShowController extends Controller
{
    public function show(Request $request)
    {
        $data1 = DB::table('investigations')->join('categorys','investigations.catid','=','categorys.id')->select('investigations.id','investigations.name','investigations.price','investigations.room','categorys.catname')->get();
        $data2 = Investigation::count();
        $data3 = Investigation::sum('price');
        return view('showAllTest', compact('data1','data2','data3'));
    }
}
