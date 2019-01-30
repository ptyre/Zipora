<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }

    public function halamanAdmin(){
        return view('slicing.dasboard');
    }

    public function tes(){
        $url = "http://localhost/zipora/api/getInfoBuku.php";
        $json = file_get_contents($url);
        $json_data = json_decode($json, true);

        return $json_data;
    }
}
