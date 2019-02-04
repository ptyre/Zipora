<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = "http://localhost/zipora/api/getInfoClass.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.class');
        } else {
            return view('slicing.class', ['class' => $json]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slicing.createclass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = "http://localhost/zipora/api/createClass.php";
        $name_class = $request->_name_class;
        $deskripsi = $request->_deskripsi;

        $data = array(
            '_name_class' => $name_class,
            '_deskripsi' => $deskripsi
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
        return redirect()->route('admin.class');

        // if ($result == "\r\n") {
        //     Session::flash('message','Berhasil');
            
        // }
        // else {
        //     return redirect()->route('admin.class');
        // }
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
    public function edit($id_class)
    {
        $url = "http://localhost/zipora/api/searchClass.php";
        // $json = json_decode(file_get_contents($url),true);
        // $class = $json->find($id);
        // return view('slicing.updateclass' , compact('class'));


        $data = array('_id' => $id_class);

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

        return view('slicing.updateclass', compact('json'));
        //return $result;
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
        $url = "http://localhost/zipora/api/updateClass.php";
        $id_class = $request->_id_class;
        $name_class = $request->_name_class;
        $deskripsi = $request->_deskripsi;

        $data = array(
            '_id_class' => $id_class,
            '_name_class' => $name_class,
            '_deskripsi' => $deskripsi
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
        Session::flash('message', 'Success edited');
        return redirect()->route('admin.class');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $url = "http://localhost/zipora/api/deleteClass.php";
        $id_class = $request->_id_class;
        $data = array('_id_class' => $id_class);

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
        return redirect()->route('admin.class');
    }
}
