<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
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
        $url = "http://localhost/zipora/api/getInfoGalery.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.gallery');
        } else {
            return view('slicing.gallery', ['gallery' => $json]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slicing.createtype');
    }

    public function show()
    {
        $url = "http://localhost/zipora/api/getInfoJenisGallery.php";
        $json = json_decode(file_get_contents($url),true);
        return view('slicing.creategallery', ['jenis' => $json]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeType(Request $request)
    {
        $url = "http://localhost/zipora/api/createJenisGallery.php";

        $nama_jenis = $request->_nama_jenis;

        $data = array(
            '_nama_jenis' => $nama_jenis
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

        Session::flash('message', 'Success');
        return redirect()->route('admin.book');

        //return dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function storePhoto(Request $request)
    {
        $image = $request->file('_picture');
        $path = $request->_picture->getClientOriginalName();
        $new_name = $image->getClientOriginalName();
        
        $url = "http://localhost/zipora/api/createGallery.php";

        $info = $request->_info;
        $tgl = $request->_tgl;
        $jenis = $request->_jenis;
        $pict = $path;

        $data = array(
            '_picture' => '/images/gallery/'.$path,
            '_info' => $info,
            '_tgl' => $tgl,
            '_jenis' => $jenis
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
        $image->move(public_path("images/gallery"), $new_name);

        //return dd($request->all());
        //return $result;
        if ($result == "\r\n") {
            //Session::flash('message', 'Gagal');
            return redirect()->route('admin.gallery');
        }
        else {
            Session::flash('message', 'Success');
            return redirect()->route('admin.gallery');
        }
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
        $url = "http://localhost/zipora/api/deleteGallery.php";
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
        return redirect()->route('admin.gallery');
    }
}
