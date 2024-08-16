<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Storetest;
use App\Models\Investigation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Digonesticsaleinfo;

class StoretestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Storetest $storetest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storetest $storetest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Storetest $storetest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storetest $storetest)
    {
        //
    }

    public function addItem($id)
    {
        $Sdata = new StoreTest();
        $dataTest = Investigation::find($id);   
        
        $regnumber = Digonesticsaleinfo::count();
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
}
