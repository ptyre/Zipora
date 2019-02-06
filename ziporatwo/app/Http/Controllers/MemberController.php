<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('slicing.member');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = "http://localhost/zipora/api/getInfoClass.php";
        $json = json_decode(file_get_contents($url),true);
        return view('slicing.createmember', ['class' => $json]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = "http://localhost/zipora/api/createMember.php";

        $name = $request->_name;
        $email = $request->_email;
        $alamat = $request->_alamat;
        $institusi = $request->_institusi;
        $tgl_masuk = $request->_tgl_masuk;
        $id_class = $request->_id_class;

        $data = array(
            '_name' => $name,
            '_email' => $email ,
            '_alamat' => $alamat,
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

        return dd($request->all());
        //Session::flash('message', 'Success');
        //return redirect()->route('admin.member');
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
    public function destroy($id)
    {
        //
    }
}
