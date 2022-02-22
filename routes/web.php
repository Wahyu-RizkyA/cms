<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\artikelController;
// use App\Http\Controllers\prak3Controller;

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



// prak 3

// Route::get('/',[prak3Controller::class,'index']);


Route::get('/', function () {
    echo "Selamat Datang Di Home Company";
});


Route::prefix('category') -> group(function(){
    Route::get("", function(){
        echo "Menampilkan isi Tab Category, isinya sebagai berikut<br><br>";
        
        echo "marbel-and-friends-kids-games<br>";
        echo "riri-story-books<br>";
        echo "kolak-kids-songs<br>";
        echo "arbel-edu-games";
    });
    Route::get("/marbel-edu-games", function(){
        echo "Menampilkan Tab atau kategori marbel edu games";
    });
    Route::get("/marbel-and-friends-kids-games", function(){
        echo "Menampilkan Tab atau kategori marbel and friends kids games";
    });
    Route::get("/riri-story-books", function(){
        echo "Menampilkan Tab atau kategori riri story books";
    });
    Route::get("/kolak-kids-songs", function(){
        echo "Menampilkan Tab atau kategori kolak kids songs";
    });
});

Route::prefix('news') -> group(function(){

    Route::get("", function(){
        echo "Menampilkan Tab news, berikut ini isi tab news<br><br>";

        echo "educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19<br>";
        echo "rpp-paud-tema-air-udara-api-subtema-ciri-dan-manfaat-udara";
    });

    Route::get("/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19", function(){
        echo "Menampilkan Berita <br> educa studio berbagi untuk warga sekitar terdampak covid 19";
    });
    Route::get("/rpp-paud-tema-air-udara-api-subtema-ciri-dan-manfaat-udara", function(){
        echo "Menampilkan Berita <br> RPP Tema Air, Udara, Api Subtema Manfaat dan Ciri-Ciri Udara Versi:
         Marbel, Blended Learning untuk PAUD usia 4-5 dan 5-6 tahun (TK-A dan TK-B)";
    });
    
});

Route::prefix('program') -> group(function(){

    Route::get("/karir" , function(){
        echo "Menampilkan Tab karir";
    });
    Route::get("/magang" , function(){
        echo "Menampilkan Tab magang";
    });
    Route::get("/kunjungan-industri" , function(){
        echo "Menampilkan Tab kunjungan industri";
    });
});

Route::get("/about-us" , function(){
    echo " Nama  : Wahyu Rizky Akbari<br>";
    echo " NIM   : 2041720191<br>";
    echo " Kelas : TI 2G";
});

