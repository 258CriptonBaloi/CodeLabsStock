<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


    //Rotas do armazem
    Route::get('armazem', [App\Http\Controllers\Admin\WarehouseController::class, 'index']);
    Route::get('armazem/create', [App\Http\Controllers\Admin\WarehouseController::class, 'create']);
    Route::post('armazem', [App\Http\Controllers\Admin\WarehouseController::class, 'store']);


});


Route::get('/logout', function (){
    Auth::logout();
    return redirect('/');
})->name('logout');
