<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $a = env('URL_API');
        $url = $a . "/getInfoTestimony.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.testimony');
        } else {
            return view('slicing.testimony', ['testimony' => $json]);
        }
        // $a = env('URL_API');
        //$url = $a . "/getInfoTestimony.php";
        // $json = json_decode(file_get_contents($url),true);

        // return $json;
        // if (empty($json)) {
        //     return view('slicing.testimony');
        // } else {
        //     return view('slicing.testimony', ['testimony' => $json]);
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slicing.createtestimony');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('_picture');
        $path = $request->_picture->getClientOriginalName();
        $new_name = $image->getClientOriginalName();
        
        $a = env('URL_API');
        $url = $a . "/createTestimony.php";

        $nama = $request->_nama;
        $text = $request->_text;
        $pict = $path;

        $data = array(
            '_picture' => '/images/testimoni/'.$path,
            '_nama' => $nama,
            '_text' => $text
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
        $image->move(public_path("images/testimoni"), $new_name);

        //return dd($request->all());
        //return $result;
        if ($result == "\r\n") {
            //Session::flash('message', 'Gagal');
            return redirect()->route('admin.testimony');
        }
        else {
            Session::flash('message', 'Success');
            return redirect()->route('admin.testimony');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $a = env('URL_API');
        $url = $a . "/deleteTestimony.php";
        $id = $request->_id;
        $data = array('_id' => $id);

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
        Session::flash('message', 'Success deleted');
        return redirect()->route('admin.testimony');
    }
}
