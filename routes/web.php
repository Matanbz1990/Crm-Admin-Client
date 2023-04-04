<?php

use App\Models\Client;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ClientController::class,'index']);

Route::get('/about', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('client.signup');
});

Route::get('/login', function () {
    return view('client.login');
});
Route::get('/admin_login', function () {
    return view('admin.admin_login');
});

Route::get('/admin', [ClientController::class,'index']);

Route::get('/{client_id}/store',[ProductController::class,'indexStore' ] );

Route::get('/{client_id}/crm',[ProductController::class,'indexCrm' ] );

Route::post('/{client_id}/crm',[ProductController::class,'store'] );

Route::delete('/{client_id}/crm/delete/{id}',[ProductController::class,'destroy'] );

Route::get('/{client_id}/crm/edit/{id}',[ProductController::class,'edit'] );

Route::get('/{client_id}/crm/create',[ProductController::class,'create' ] );
