<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Investigation;
use App\Models\StoreTest;

class TestSaleController extends Controller
{
    public function index()
    {
        $data1 = Investigation::all();
        $sum = Investigation::sum('price');
        $storetest = StoreTest::all();
        $sum2 = StoreTest::sum('testprice');
        return view('testSale', compact('data1','sum','storetest','sum2'));
    }

}
