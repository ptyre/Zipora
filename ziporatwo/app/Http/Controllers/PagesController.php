<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $url = "http://localhost/Zipora/api/frontend/dashboard.php";
      $json = json_decode(file_get_contents($url),true);

        return view('pages.index', ['data' => $json]);
    }

    public function gallery(){
      $url = "http://localhost/Zipora/api/getInfoGalery.php";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.gallery' , ['data' => $json]);
    }

    public function galleryJudul(){
      $url = "http://localhost/Zipora/api/getImageJenis.php";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.gallery-judul' , ['data' => $json]);
    }

    public function class(){
      $url = "http://localhost/Zipora/api/getInfoClass.php";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.class' , ['data' => $json]);
    }

    public function book(){
      $url = "http://localhost/Zipora/api/frontend/getTesBook.php";
      $json = json_decode(file_get_contents($url),true);

      return view('pages.buku', ['data' => $json]);
    }

    public function news(){

      return view('pages.news-detail');
    }

    public function article(){
      return view('pages.article-detail');
    }

    public function seemorenws(){

      return view('pages.news-seemore');
    }

    public function seemoreatc(){
      return view('pages.article-seemore');
    }
}
