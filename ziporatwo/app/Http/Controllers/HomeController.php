<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = "http://localhost/zipora/api/getDasboard.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.dasboard');
        } else {
            return view('slicing.dasboard', ['dasboard' => $json]);
        }
    }
}
