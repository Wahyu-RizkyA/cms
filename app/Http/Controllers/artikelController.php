<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class artikelController extends Controller
{
    public function artikel($id){
        return "(artikel controller)Ini merupakan halaman artikel dengan ID  = $id";
    }
}
