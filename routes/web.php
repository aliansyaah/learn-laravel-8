<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Middleware\CheckLoginMiddleware;

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

// Solusi jika controller disimpan di dalam sub folder
Route::get('/', 'App\Http\Controllers\Auth\AuthController@index')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\AuthController@login')->name('login');

/* Route::get('/dashboard', function () {
    // Manual check session tanpa middleware
    if(session('login_success')){
        return view('index');
    }else{
        return redirect('/');
    }
}); */

/* Memberi nama alias pada route, agar ketika kita ingin mengubah route tidak perlu 
    mengubah satu-satu di tiap halaman view yang memanggil oute tersebut.
    Contoh:
    Jika route "crud/add" akan diganti mjd "crud/addData", tidak perlu mengubah route 
    di tiap hlm view yang kita buat, cukup di file ini saja.
 */

// Route::middleware(['middleware', 'CheckLoginMiddleware'])->group(function () {
Route::middleware([CheckLoginMiddleware::class])->group(function () {
// Route::group(['middleware' => 'CheckLoginMiddleware'], function() {

    Route::get('/dashboard', function () { return view('index'); });
    Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');
    
    Route::get('crud', [CrudController::class, 'index'])->name('crud.read');
    Route::get('crud/add', [CrudController::class, 'add'])->name('crud.add');
    Route::post('crud', [CrudController::class, 'create'])->name('crud.save');
    Route::get('crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
    Route::patch('crud/{id}', [CrudController::class, 'update'])->name('crud.update');
    Route::delete('crud/{id}', [CrudController::class, 'delete'])->name('crud.delete');
});

