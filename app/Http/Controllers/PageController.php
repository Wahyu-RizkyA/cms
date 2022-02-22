<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang di Website Laravel (page controllers)";
    }

    public function about(){
        return " Nama  : Wahyu Rizky Akbari<br> NIM   : 2041720191<br> Kelas : TI 2G (page controllers)";
    }

    public function artikel($id){
        return "(page controller)Ini merupakan halaman artikel dengan ID  = $id";
    }

    
}
