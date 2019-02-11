<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest');
	}
	
    public function index(){
    	return view('login');
    }

    public function store(Request $request){
    	$url = "http://localhost/zipora/api/login.php";
        $username = $request->input('_username');
        $password = $request->input('_password');

       	$data = array(
            '_username' => $username,
            '_password' => $password
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

        //return $result;	

        if ($result == 'Gagal') {
        	return redirect('/loginAdmin')->with('failed','Login gagal');
        }
        else {
        	Session::put('message','Selamat anda berhasil masuk');
        	return redirect()->route('homeadmin');
        }
 
        //$users = DB::table('admin')->where(['nama'=>$user, 'password'=>$pass])->first();
 
        // if(count($users)==0){
 
        //    return redirect('/')->with('failed','Login gagal');
 
        // } else
       
        // if($user == $users->nama AND $pass == $users->password ){
            
        //    Session::put('login', 'Selamat anda berhasil login');
        //    return redirect('/admin');
 
        // } else {
             
        //    return redirect('/')->with('failed','Login gagal');
  
        // }
    }

    public function logout(){

    }

    // public function tes(){
    //     $url = "http://localhost/zipora/api/getInfoBuku.php";
    //     $json = file_get_contents($url);
    //     $json_data = json_decode($json, true);

    //     return $json_data;
    // }
}
