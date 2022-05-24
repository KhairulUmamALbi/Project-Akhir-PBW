<?php


use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WarnetController;
use App\Models\Warnet;
use Illuminate\Http\Request;

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
    return view('login');
});


Route::get('/beranda', function () {
    session_start();
    return view('Warnet.index');
});



Route::post('/beranda', [AuthenticateController::class,'login']);


// menampilkan data
Route::get('/Warnet',[WarnetController::class,'index']);
// menambahkan data
Route::get('/Warnet/create',[WarnetController::class,'create']);
//menyimpan data
Route::post('/Warnet/store',[WarnetController::class,'store']);

//menghapus data
Route::delete('/Warnet/{id}',[WarnetController::class,'destroy']);
