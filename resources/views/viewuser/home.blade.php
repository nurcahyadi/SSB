@extends('tamplatetampilan')
@include('header')
@section('isi')
<style media="screen">
body{
  background-image:url(image/stadium.jpg); background-size:cover;
}
img.utama{
  margin-top: 100px;
  height: 130px;
  width: 130px;
}
img.sosmed{
  margin-top: 20px;
}
h3.bold{
  color: white;
  font-family: Arial Black;
  font-weight: bold;
}
h5.bold{
  color: white;
  font-weight: bold;
}

</style>



<div class="center logo">

  <img class="utama" src="image/logossbmutiara.jpg" width="200" height="200">


  <h3 class="bold">
    SEKOLAH SEPAKBOLA
    <br>
    MUTIARA 97
    <br>
    KOTA BOGOR
  </h3>
  {{-- <h3 class="bold">MUTIARA 97</h3>
  <h3 class="bold">KOTA BOGOR</h3> --}}

  <h5 class="bold">SATU HATI!</h5>
  <h5 class="bold">SATU JIWA!</h5>

  <a href="https://www.facebook.com/ssb.mutiara.1"> <img class="sosmed" src="image/facebook.png" height="30" width="30"></a>
  <a href="https://twitter.com/ssbmutiara97"> <img class="sosmed" src="image/twitter.png" height="30" width="30"> </a>
  <a href="https://www.instagram.com/ssb_mutiara_97/"> <img class="sosmed" src="image/instagram.png" height="30" width="30"> </a>
  <a href="mailto:official@ssbmutiara97.com"> <img class="sosmed" src="image/email.png" height="30" width="30"> </a>
</div>

@endsection
