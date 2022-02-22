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
//     return view('welcome');
// });

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




