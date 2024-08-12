<?php

namespace App\Http\Controllers;

use App\Models\Storetest;
use App\Models\Investigation;
use Illuminate\Http\Request;

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

        $findTest = StoreTest::where('regNum','=',1)->where('testid','=',$dataTest->id)->get();
        
        if(isset($findTest) )
        {
            $Sdata->regNum=1;
            $Sdata->testid=$dataTest->id;
            $Sdata->testprice=$dataTest->price;
            $Sdata->catid=$dataTest->catid;
            $Sdata->room=$dataTest->room;        
            
            $Sdata->save();
            return redirect()->back()->with('success', 'Test added to cart successfully!');
        }
        else
        {
            return redirect()->back()->with('error', 'This test already added. Please try another. Thank you!');
        }
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart',[]);
        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return back()->with('success','Item remove successfully');
        }
        return redirect()->back()->with('error','Item remove not possible');
    }
}
