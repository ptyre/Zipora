<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function storeclass(Request $request){
      $url = "http://localhost/zipora/api/createMember.php";

      $name = $request->_name;
      $email = $request->_email;
      $alamat = $request->_alamat;
      $telp = $request->_telp;
      $institusi = $request->_institusi;
      $tgl_masuk = $request->_tgl_masuk;
      $id_class = $request->_id_class;

      $data = array(
          '_name' => $name,
          '_email' => $email ,
          '_alamat' => $alamat,
          '_telp' => $telp,
          '_institusi' => $institusi,
          '_tgl_masuk' => $tgl_masuk,
          '_id_class' => $id_class
      );

      $option = array(
          'http' => array(
          'header' => "Content-type: application/x-www-form-urlencoded\r\n",
          'method' => "POST",
          'content' => http_build_query($data)
          )
      );
      $context = stream_context_create($option);
      $result = file_get_contents($url, false, $context);

      //return dd($request->all());
      Session::flash('message', 'Success');
      return redirect()->route('class');
    }

    public function book(){
      $url = "http://localhost/Zipora/api/frontend/getTesBook.php";
      $json = json_decode(file_get_contents($url),true);

      return view('pages.buku', ['data' => $json]);
    }

    public function news(Request $request){
      $url = "http://localhost/zipora/api/frontend/searchNews.php";

      $id = $request->_id;
      $data = array('id' => $id);

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

      return view('pages.news-detail', compact('json'));


    }

    public function article(Request $request){

      $url = "http://localhost/zipora/api/frontend/searchArticle.php";

      $id = $request->_id;
      $data = array('id' => $id);

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
      //return $json;
      return view('pages.article-detail', compact('json'));
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

    public function about(){
      return view('pages.about');
    }
}
