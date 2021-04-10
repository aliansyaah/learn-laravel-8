<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('crud', function () {
    return view('crud');
});

/* Memberi nama alias pada route, agar ketika kita ingin mengubah route tidak perlu 
    mengubah satu-satu di tiap halaman view yang memanggil oute tersebut.
    Contoh:
    Jika route "crud/add" akan diganti mjd "crud/addData", tidak perlu mengubah route 
    di tiap hlm view yang kita buat, cukup di file ini saja.
 */
Route::get('crud', [CrudController::class, 'index'])->name('crud.read');
Route::get('crud/add', [CrudController::class, 'add'])->name('crud.add');