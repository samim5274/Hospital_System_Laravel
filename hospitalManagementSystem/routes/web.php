<?php

use App\Models\Category;
use App\Models\Investigation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InvestigationController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\TestSaleController;
use App\Http\Controllers\StoreTestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function() {
    return view('dashboard');
})->middleware('auth');

Route::get('/login', function() {
    return view('userRegister');
});

Route::resource('/user-signup', App\Http\Controllers\UserController::class);

Route::get('/user-login', 'App\Http\Controllers\UserController@login');

// Route::get('/test-sale', function() {
//     return view('testSale');
// });

Route::get('/test-sale','App\Http\Controllers\DigonesticsaleinfoController@index');

Route::get('/test-sale/data-insert', 'App\Http\Controllers\DigonesticsaleinfoController@store');

// Route::get('/test-details', function() {
//     // $cat = DB::table('categorys')->get();     
//     // $investigate = DB::table('investigations')->get();
//     // return view('testDetails', compact('cat','investigate'));
// });

Route::get('/test-details', 'App\Http\Controllers\CategoryController@index');

Route::resource('/insert-Iinvestigation', InvestigationController::class);

// Route::get('/test-details', [CategoryController::class, 'index']);

// ======================== testing route here start ========================= //

Route::get('/view-test-details', 'App\Http\Controllers\ShowController@show');

Route::get('/add-item/{id}','App\Http\Controllers\ShowController@addItem');

Route::get('/remove/item/{id}','App\Http\Controllers\ShowController@removeItem');

Route::get('/show-filer-investigation-data','App\Http\Controllers\ShowController@filerData');

Route::get('/test-middleware', function(){
    return view('testMiddleware');
})->middleware('isActive');

// ======================== testing route here end ========================= //

Route::get('/add-item/{id}','App\Http\Controllers\StoreTestController@addItem');

Route::get('/remove/item/{id}','App\Http\Controllers\StoreTestController@removeItem');

