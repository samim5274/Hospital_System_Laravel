<?php

use App\Models\Category;
use App\Models\Investigation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TestSaleController;
use App\Http\Controllers\StoreTestController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/login', function() {
    return view('login');
});

// Route::get('/test-sale', function() {
//     return view('testSale');
// });

Route::get('/test-sale','App\Http\Controllers\TestSaleController@index');

// Route::get('/test-details', function() {
//     // $cat = DB::table('categorys')->get();     
//     // $investigate = DB::table('investigations')->get();
//     // return view('testDetails', compact('cat','investigate'));
// });

Route::get('/test-details', 'App\Http\Controllers\CategoryController@index');

Route::resource('/insert-Iinvestigation', InvestigationController::class);

// Route::get('/test-details', [CategoryController::class, 'index']);

Route::get('/view-test-details', 'App\Http\Controllers\ShowController@show');

Route::get('/add-item/{id}','App\Http\Controllers\StoreTestController@addItem');

Route::get('/remove/item/{id}','App\Http\Controllers\StoreTestController@removeItem');
