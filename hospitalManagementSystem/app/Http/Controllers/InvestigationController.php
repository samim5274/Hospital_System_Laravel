<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Investigation;
use Illuminate\Http\Request;

class InvestigationController extends Controller
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
        $data = new Investigation();
        $data->name=$request->has('test_name')? $request->get('test_name'):'';
        $data->catid=$request->has('category')? $request->get('category'):'';
        $data->price=$request->has('price')? $request->get('price'):'';
        $data->room=$request->has('room')? $request->get('room'):'';
        $data->save();
        return back()->with('success','Investigation test insert successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Investigation $investigation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investigation $investigation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investigation $investigation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investigation $investigation)
    {
        //
    }

}
