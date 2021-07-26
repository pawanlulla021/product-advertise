<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InfluencerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//landing page of user side
Route::get('/', [ProductController::class,'index']);
Route::post('/userproducts_details',[ProductController::class,'userproducts_store']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/checkout', function () {
    return view('checkout');
});
//landing page of user side





//admin side
Route::get('/admin/login', function () {
    return view('admin.login');
});
Route::get('/admin/logout', function () {
    //ye session ko forget 
    Session::forget('user');
    return redirect('/admin/login');
});

Route::post('/admin/login',[InfluencerController::class,'login']);

//admin login


//admin login

//Route::get('/admin/home', function () {
//    return view('admin.home');
//});



//add influencers 
Route::get('/admin/add_product', function () {
    return view('admin.men');
});
Route::post('/admin/add_product', [InfluencerController::class,'addproduct']);
//add influencers

//view influencers  
Route::get('/admin/view_product', [InfluencerController::class,'viewaddedinfluencer']); 
//view influencers

//view want quotation users
Route::get('/admin/view_order', [InfluencerController::class,'viewwantquotationusers']); 
//view want quotation users

//view register users
Route::get('/admin/register', [InfluencerController::class,'viewregisteredusers']);
//view register users

//home page
Route::get('/admin/home', [InfluencerController::class,'homepage']);
//home page

//get old data from table 
Route::get('/edit/{id}', [InfluencerController::class,'edit']);
//get old data from table

//updating influencers
Route::patch('/update/{id}',[InfluencerController::class,'update']);
//updating influencers

//delete influencers
Route::get('/delete/{id}', [InfluencerController::class,'destroy']);
//delete influencers


