<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/home', [App\Http\Controllers\Delicacies::class, 'index'])->name('show_delicacies');
    Route::get('/delicacies', [App\Http\Controllers\Delicacies\DelicaciesController::class,'index'])->name('delicacies');
    Route::get('/add_delicacies', [App\Http\Controllers\Delicacies\DelicaciesController::class,'create'])->name('add_delicacies');
    Route::post('/save_delicacies', [App\Http\Controllers\Delicacies\DelicaciesController::class, 'store'])->name('save_delicacies');
    Route::get('/delicacy/edit/{id}', [App\Http\Controllers\Delicacies\DelicaciesController::class, 'edit'])->name('edit_delicacy');
    Route::post('/update/{id}',[App\Http\Controllers\Delicacies\DelicaciesController::class,'update']);
    Route::get('/delicacy/delete/{id}',[App\Http\Controllers\Delicacies\DelicaciesController::class, 'destroy']);
});

Route::get('order-item/{id}', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('purchase/{id}', [App\Http\Controllers\HomeController::class, 'purchase'])->middleware('auth');

// Route::get('/admin/home', function(){
//     return view('admin.layouts.main');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
