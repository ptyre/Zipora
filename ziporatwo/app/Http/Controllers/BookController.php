<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class BookController extends Controller
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
        $url = "http://localhost/zipora/api/getInfoBook.php";
        $json = json_decode(file_get_contents($url),true);

        if (empty($json)) {
            return view('slicing.book');
        } else {
            return view('slicing.book', ['book' => $json]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slicing.createbook');
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
        

        $url = "http://localhost/zipora/api/createBook.php";

        $id_buku = $request->_id_buku;
        $judul_buku = $request->_judul_buku;
        $pengarang = $request->_pengarang;
        $penerbit = $request->_penerbit;
        $tahun = $request->_tahun;
        $kota = $request->_kota;
        $deskripsi = $request->_deskripsi;
        $deskripsi_pendek = $request->_deskripsi_pendek;
        $pict = $path;

        $data = array(
            '_id_buku' => $id_buku,
            '_judul_buku' => $judul_buku,
            '_pengarang' => $pengarang,
            '_penerbit' => $penerbit,
            '_tahun' => $tahun,
            '_kota' => $kota,
            '_deskripsi' => $deskripsi,
            '_deskripsi_pendek' => $deskripsi_pendek,
            '_picture' => '/images/buku/'.$path
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
        $image->move(public_path("images/buku"), $new_name);

        //return dd($request->all());
        //return $result;
        if ($result == "\r\n") {
            //Session::flash('message', 'Gagal');
            return redirect()->route('admin.book');
        }
        else {
            //Session::flash('message', 'Success');
            return redirect()->route('admin.book');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        $url = "http://localhost/zipora/api/searchBook.php";

        $data = array('_id_buku' => $id_buku);

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

        return view('slicing.updateBook', compact('json'));
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
        $url = "http://localhost/zipora/api/updateBook.php";
        $id_buku = $request->_id_buku;
        $judul_buku = $request->_judul_buku;
        $pengarang = $request->_pengarang;
        $penerbit = $request->_penerbit;
        $tahun = $request->_tahun;
        $kota = $request->_kota;
        $deskripsi = $request->_deskripsi;
        $deskripsi_pendek = $request->_deskripsi_pendek;

        $data = array(
            '_id_buku' => $id_buku,
            '_judul_buku' => $judul_buku,
            '_pengarang' => $pengarang,
            '_penerbit' => $penerbit,
            '_tahun' => $tahun,
            '_kota' => $kota,
            '_deskripsi' => $deskripsi,
            '_deskripsi_pendek' => $deskripsi_pendek
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
        return redirect()->route('admin.book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $url = "http://localhost/zipora/api/deleteBook.php";
        $id_buku = $request->_id_buku;
        $data = array('_id_buku' => $id_buku);

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
        return redirect()->route('admin.book');
        //return $result;
    }
}
