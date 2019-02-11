@extends('pages.master', ['title' => 'Home'])


@section('css')

@endsection

@section('navigasi')
<section id="buku">
    <div class="mybros">
    <div class="kolum" style="background-color:orange;">
      <h2>Column 1</h2>
      <p>Some text..</p>
    </div>
    <div class="kolum" style="background-color:black;">
      <h2>Column 2</h2>
      <p>Some text..</p>
    </div>
  </div>
</section>
@endsection

@section('content')

@endsection

@section('script')
  @parent

@endsection
