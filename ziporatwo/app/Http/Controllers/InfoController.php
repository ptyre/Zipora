<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $url = "http://localhost/zipora/api/getInfoInformasi.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.information');
        } else {
            return view('slicing.information', ['info' => $json]);    
        }
        
        //return dd($request->$json);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = "http://localhost/zipora/api/getInfoJenisInfo.php";
        $json = json_decode(file_get_contents($url),true);
        return view('slicing.createinfo', ['jenis' => $json]);

        // return view('slicing.createinfo');
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
        

        $url = "http://localhost/zipora/api/createInformation.php";

        $judul = $request->_judul;
        $pict = $path;
        $informasi = $request->_informasi;
        $id_jenisinfo = $request->_id_jenisinfo;
        $tgl = $request->_tgl;

        $data = array(
            '_judul' => $judul,
            '_picture' => $path,
            '_informasi' => $informasi,
            '_id_jenisinfo' => $id_jenisinfo,
            '_tgl' => $tgl
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
        $image->move(public_path("images/info"), $new_name);

        //return dd();
        //Session::flash('message', 'Success');
        return redirect()->route('admin.info');
        // if ($result == "\r\n") {
            
        // }
        // else {
        //     //Session::flash('message', 'Gagal');
        //     //return redirect()->route('admin.info');
        //     return dd($request->all());
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showJenisInfo()
    {
        // $url = "http://localhost/zipora/api/getInfoJenisInfo.php";
        // $json = json_decode(file_get_contents($url),true);
        // return view('admin.createi', ['jenis' => $json]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $url = "http://localhost/zipora/api/searchInfo.php";

        $data = array('_id' => $id);

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

        return view('slicing.updateInformasi', compact('json'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $url = "http://localhost/zipora/api/updateInformation.php";
        $id = $request->_id;
        $judul = $request->_judul;
        $informasi = $request->_informasi;
        $tgl = $request->_tgl;

        $data = array(
            '_id' => $id,
            '_judul' => $judul,
            '_informasi' => $informasi,
            '_tgl' => $tgl
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
        //return dd($request->$result);
        Session::flash('message', 'Success edited');
        return redirect()->route('admin.info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $url = "http://localhost/zipora/api/deleteInformation.php";
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

        Session::flash('message', 'Success deleted');
        return redirect()->route('admin.info');
    }
}
