<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\artikelController;

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
// prak 1
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo "‘Hi! Selamat Datang di Website Laravel";
});

Route::get('/about', function () {
    echo " Nama  : Wahyu Rizky Akbari<br>";
    echo " NIM   : 2041720191<br>";
    echo " Kelas : TI 2G";
});


Route::get('/artikel/{id}', function ($id) { 
    echo "Ini merupakan halaman artikel dengan ID  = $id"; 
   });


//    prak 2
Route::get('/',[PageController::class,'index']);

Route::get('/about',[PageController::class,'about']);

Route::get('/artikel/{id}',[PageController::class,'artikel']);




Route::get('/',[homeController::class,'index']);

Route::get('/about',[aboutController::class,'about']);

Route::get('/artikel/{id}',[artikelController::class,'artikel']);




