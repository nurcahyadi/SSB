@extends('tamplatetampilan')
@include('header')
@section('isi')
<style media="screen">
body {
  background-image:url(image/background2.jpg); background-size:cover
}
img {
  margin-top: 80px;
}
h3{
  color: white;
  font-family: fantasy-desdemona;
}

</style>


<div class="center logo">
  <img src="image/logo1.png" width="200" height="200">
  <h3>SEKOLAH SEPAKBOLA</h3>
  <h3>TELKOM UNIV</h3>
  <h3>KOTA BANDUNG</h3>

  <img src="image/facebook.png" height="30" width="30">
  <img src="image/twitter.png" height="30" width="30">
  <img src="image/instagram.png" height="30" width="30">
  <img src="image/youtube.png" height="30" width="30">
</div>

@endsection
