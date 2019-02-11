<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $url = "http://localhost/api/frontend/dashboard.php";
      $json = json_decode(file_get_contents($url),true);

        return view('pages.index', ['data' => $json]);


    }

    public function gallery(){
      return view('pages.gallery');
    }

    public function galleryJudul(){
      return view('pages.gallery-judul');
    }
}
