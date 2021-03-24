<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationDataManagement;
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

Route::get('/', function () {
    return redirect('view');
});

Route::get('create',[ApplicationDataManagement::class,'create'])->name('create');

//store data route
Route::post('store',[ApplicationDataManagement::class,'store'])->name('storeData');

//view data
Route::get('view',[ApplicationDataManagement::class,'index'])->name('view');

//edit project
Route::get('edit/{id}',[ApplicationDataManagement::class,'edit'])->name('edit');

//update edited data
Route::post('update/{id}',[ApplicationDataManagement::class,'update'])->name('update');

//delete project
Route::get('delete/{id}',[ApplicationDataManagement::class,'destroy'])->name('delete');