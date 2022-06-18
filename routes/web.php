<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\formcontroller;
use App\Http\controllers\customercontroller;

use App\Models\Customer;
// use App\Http\Controllers\resourceController;
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

// Route::get('/home', function () {
//     return view('child');
// });
Route::get('reg', [formcontroller::class,'reg']);
Route::post('/login', [formcontroller::class,'store']);
// Route::get('resource',resourceController::class);
Route::get('indexx',singleActionController::class);
Route::get('/', [homecontroller::class,'index']);
Route::get('', [App\Http\Controllers\testincontroller::class,'laravel'])->name('laravel');
Route::get('message', [App\Http\Controllers\testincontroller::class,'message'])->name('message');
// model calling route
Route::get('customer',  function(){
$customers  = customer::all();
echo"<pre>";
print_r($customers);
});
Route::get('/customer', [customercontroller::class,'index']);
Route::post('/customer', [customercontroller::class,'store']);
Route::get('/customer/view', [customercontroller::class,'select']);
Route::get('/customer/delete/{id}', [customercontroller::class,'delete'])->name('customer.delete'); 
Route::get('/customer/edit/{id}', [customercontroller::class,'edit'])->name('customer.edit'); 

Route::post('updatedata/{id}', [customercontroller::class,'update']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
