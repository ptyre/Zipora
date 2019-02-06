<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = "http://localhost/zipora/api/getInfoMember.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.member');
        } else {
            return view('slicing.member', ['member' => $json]);    
        }
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
        return redirect()->route('admin.member');
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
    public function edit($id_member)
    {
        $url = "http://localhost/zipora/api/searchMember.php";

        $data = array('_id_member' => $id_member);

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

        return view('slicing.updateMember', compact('json'));
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
        $url = "http://localhost/zipora/api/updateMember.php";

        $id_member = $request->_id_member;
        $name = $request->_name;
        $telp = $request->_telp;
        $email = $request->_email;
        $alamat = $request->_alamat;
        $institusi = $request->_institusi;

        $data = array(
            '_id_member' => $id_member,
            '_name' => $name,
            '_telp' => $telp,
            '_email' => $email,
            '_alamat' => $alamat,
            '_institusi' => $institusi
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
        return redirect()->route('admin.member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $url = "http://localhost/zipora/api/deleteMember.php";
        $id_member = $request->_id_member;
        $data = array('_id_member' => $id_member);

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
        return redirect()->route('admin.member');
    }
}
