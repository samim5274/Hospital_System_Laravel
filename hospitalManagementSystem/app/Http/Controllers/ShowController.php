<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Investigation;
use App\Models\Storetest;
use App\Models\Digonesticsaleinfo;

class ShowController extends Controller
{
    public function show(Request $request)
    {
        $data1 = DB::table('investigations')->join('categorys','investigations.catid','=','categorys.id')->select('investigations.id','investigations.name','investigations.price','investigations.room','categorys.catname')->get();
        $data2 = Investigation::count();
        $data3 = Investigation::sum('price');

        $storetest = StoreTest::all();
        $sum2 = StoreTest::sum('testprice');

        
        
        return view('showAllTest', compact('data1','data2','data3','storetest','sum2'));
    }

    public function addItem($id)
    {
        $Sdata = new StoreTest();
        $dataTest = Investigation::find($id);   
        
        $regnumber = 2;
        $tname = $dataTest->name;
              
        $findReg = StoreTest::where('regNum','LIKE','%'. $regnumber . '%')->where('testname','LIKE','%'. $tname . '%')->GET();
        
        if($findReg->isEmpty())
        {
            $Sdata->regNum = $regnumber;
            $Sdata->testname=$dataTest->name;
            $Sdata->testprice=$dataTest->price;
            $Sdata->catid=$dataTest->catid;
            $Sdata->room=$dataTest->room;        
            
            $Sdata->save();
            return redirect()->back()->with('success', 'Test added to list successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'Test already found. Try another to add.'); 
        }
    }

    public function removeItem($id)
    {
        $deleteStoreTest = Storetest::find($id);
        $deleteStoreTest->delete();
        return redirect()->back()->with('success','Item test delete successfully.');
    }

    public function filterData($sDate, $eDate, Request $request)
    {
        $sDate = $request->has('startDate')? $request->get('startDate'):'';
        $eDate = $request->has('endDate')? $request->get('endDate'):'';
        dd($Sdata, $eDate);
        $saleinfo = Digonesticsaleinfo::whereBetween('testsalteDate',[$sDate, $eDate])->get();
    }

}
