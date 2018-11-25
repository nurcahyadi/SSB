{{-- @extends('tamplatetampilan') --}}
@section('header')


  <ul id="dropdown1" class="dropdown-content" style="padding:0px;">
    <li><a href="{{route('profpelatih')}}">Pelatih</a></li>
    <li><a href="{{route('profpemain')}}">Pemain</a></li>
    <li><a href="{{route('tentangssb')}}">SSB Mutiara</a></li>
    <li><a href="{{route('prestasi')}}">Prestasi</a></li>
  </ul>
  <ul id="dropdown2" class="dropdown-content" style="padding:0px;">
    <li><a href="{{route('profpelatih')}}">Pelatih</a></li>
    <li><a href="{{route('profpemain')}}">Pemain</a></li>
    <li><a href="{{route('tentangssb')}}">SSB Mutiara</a></li>
    <li><a href="{{route('prestasi')}}">Prestasi</a></li>
  </ul>


  <nav class="blue-grey darken-4">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('home')}}" ><i class="material-icons left">home</i>Beranda</a></li>
        <li><a href="{{route('gallery')}}"><i class="material-icons left">collections</i>Galeri</a></li>
        <li><a href="{{route('daftar')}}"><i class="material-icons left">content_paste</i>Pendaftaran</a></li>
        <li><a class="dropdown-web" data-target="dropdown1">Profil<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{{route('about')}}" ><i class="material-icons left">info</i>Kontak</a></li>
        <li><a href="{{route('homeadmin')}}" >Login</a>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('home')}}" ><i class="material-icons left">home</i>Beranda</a></li>
    <li><a href="{{route('gallery')}}"><i class="material-icons left">collections</i>Galeri</a></li>
    <li><a href="{{route('daftar')}}"><i class="material-icons left">content_paste</i>Pendaftaran</a></li>
    <li><a class="dropdown-web" data-target="dropdown2">Profil<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="{{route('about')}}" ><i class="material-icons left">info</i>Kontak</a></li>
    <li><a href="{{route('homeadmin')}}" >Login</a>
  </ul>

  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, instances);
});
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.dropdown-web');
var instances = M.Dropdown.init(elems, instances);
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, instances);
  });
  </script>

@endsection
