@extends('pages.master', ['title' => 'Home'])


@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

@endsection

@section('content')


<section style="width:100%;background-repeat: no-repeat;background-position: center;background-size:cover;background-image:url('/images/foto-background/IMG_6367.jpg')">

<div class="about" style="width:100%;">
  <div style="height:100px;">
  </div>
  <div class="row justify-content-center" style="margin-left:54px;width:90%;">
    <h1>Who i am</h1>
  </div>
  <div style="width:90%;"  class="container">
  <div style="margin-left:25px;" class="row">
  <div  class="col-sm-5 align-items-center">
    <div class="card align-items-center" style="margin-top:70px;">
      <image style="width:350px;" src="{{asset('images/foto-background/Foto-about.png')}}"></image>
    </div>
  </div>
  <div  class="col-sm-7">
    <div class="card" style="opacity:0.6;">
      <div class="card-title">
        <h3>Zipora Trie Wardhani Obedja. M.JB.A</h3>
        <h5>Life coach trainer</h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
        <p>Seorang wanita bekelahiran bandung 29 september</p>
        <p>yang berdomilisi di bandung</p>
        <p>ibu dari 3 orang putera dan putri</p>
        <p>- Dorian Arthur Saputra</p>
        <p>- Gabrielle Ariel Marry Ann</p>
        <p>- Emerson Mikha Angelo Saputra</p><br />
        <p>Suami dari seorang wiraswasta di Bandung
        Tn "Hendra Kurniawan Jahja Saputra" yang sangat
        mendukung perkembangan karir Zipora.</p><br />

        <p>Kecintaanku akan dunia bisnis dirintis sejak lepas dari dunia
professional dengan membangun perusahaan  bersama
teman - temanku di CV IndoEuro lalu membangun dan
berkembang sebagai co - founder Rai Fitness Indonesia. dan berhasil membuka cabang di Sukabumi, Samarinda, Bali dan Jakarta</p>

      </div>
      <div class="col">
        <p>Berhasil menyelesaikan jenjang studi hingga master
sambal berkerja.
Menghabisaka sebagian besar hidup di bidang
Sales dan Marketing</p>
      </div>
    </div>
    <div class="row">
      <p>Berawal sebagai dosen tamu di D3 UNPAR (Universitas Parahyangan) Bandung dan alumni sana 4 tahun lalu karena
kecintaanku pada berbagai ilmu, tepatnya awal tahun 2015, semua dilepaskan demi mengembangkan #temansharing,
komunitas dan training center yang didirikan sejak 2009 untuk membantu banyak fress graduate</p>
    </div>
    <div class="row justify-content-center">
      <p>Berbagi Manfaat dengan #temansharing</p>
    </div>
    <div class="row justify-content-center">
      <p>Salam Excellent</p>
    </div>
    </div>



        </div>




      </div>
    </div>
  </div>

  <div class="row">
    <div class="container" style="width:87%;" >
      <div class="card" style="opacity: 0.6;width:90%;margin-left:60px;margin-top:50px;margin-bottom:80px;" >
        <div class="card-title">
          <h2>Zipora Trie Wardhani Obadja, M.B.A</h2>
        </div>
        <div class="card-body">
          <div class="row">
            <p>Certified Trainer NLP Approved By Nf NLP Florida USA</p>
            <p>Life Coach Trainer Approved By IALC</p>
            <p>NLP Coach Approved by NF NLP Florida USA</p>
            <p>MI Trainer approved by HCI Elite (MI-120)</p>
            <p>NEo NLP Trainer NNLP</p>
            <p>Learnig Designer Prationer</p>
            <p>Excellent Human Development Coach</p>
          </div>
          <div class="row">
            <p>Pernah bekerja di beberapa perusahaan nasional di antaranya:</p>
            <p>PT. Ritra Cargo Indonesia</p>
            <p>PT. EuroAsiatic Jaya</p>
            <p>PT. Polyunion</p>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>


</section>


@endsection

@section('script')
  @parent


@endsection
