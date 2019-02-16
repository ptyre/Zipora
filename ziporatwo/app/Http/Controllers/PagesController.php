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

    public function gallery(Request $request){
      $url = "http://localhost/Zipora/api/frontend/searchPhoto.php";

      $jenis = $request->_jenis;
      $data = array('jenis' => $jenis);

      $option = array(
          'http' => array(
              'header' => "Content-type: application/x-www-form-urlencoded\r\n",
              'method' => "POST",
              'content' => http_build_query($data)
          )
      );

      $context = stream_context_create($option);
      $result = file_get_contents($url,true,$context);

      $json = json_decode($result);


      return view('pages.gallery', compact('json'));
    }

    public function galleryJudul(){
      $url = "http://localhost/Zipora/api/frontend/getImageJenis.php";
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
      $url = "";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.news-detail', ['data' => $json]);

    }

    public function article(){
      $url = "";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.article-detail', ['data' => $json]);
    }

    public function seemorenws(){
      $url = "http://localhost/Zipora/api/frontend/dashboard.php";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.news-seemore', ['data' => $json]);
    }

    public function seemoreatc(){
      $url = "http://localhost/Zipora/api/frontend/dashboard.php";
      $json = json_decode(file_get_contents($url),true);
      return view('pages.article-seemore', ['data' => $json]);
    }
}
