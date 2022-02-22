<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang di Website Laravel (Home controllers)";
    }
}
