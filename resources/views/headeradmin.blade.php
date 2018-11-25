@section('header')
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="{{route('homepelatihadmin')}}">Pelatih</a></li>
    <li><a href="{{route('homepemainadmin')}}">Pemain</a></li>
    
  </ul>


  <nav class="blue-grey darken-4">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('homeadmin')}}" ><i class="material-icons left">home</i>Beranda</a></li>
        <li><a href="{{route('homegalleryadmin')}}"><i class="material-icons left">collections</i>Galeri</a></li>
        <li><a class="dropdown-web" data-target="dropdown1">Profil<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{{route('homeaboutadmin')}}" ><i class="material-icons left">info</i>Prestasi</a></li>
        <li><a href="{{route('homepembayaran')}}">Pembayaran</a></li>

        <li>

        <form  action="{{route('logout')}}" method="post">
                {{ csrf_field() }}

                {{-- <a type="sumbit">Logout</a> --}}
                  <li><button type="submit" class="waves-effect waves-light btn-small" style="margin-right:20px;">Logout</button></li>

        </form></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('homeadmin')}}" ><i class="material-icons left">home</i>Beranda</a></li>
    <li><a href="{{route('homegalleryadmin')}}"><i class="material-icons left">collections</i>Galeri</a></li>
    <li><a class="dropdown-web" data-target="dropdown1">Profil<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="{{route('homeaboutadmin')}}" ><i class="material-icons left">info</i>Prestasi</a></li>
    <li><a href="{{route('homepembayaran')}}">Pembayaran</a></li>

    <li>

    <form  action="{{route('logout')}}" method="post">
            {{ csrf_field() }}

            {{-- <a type="sumbit">Logout</a> --}}
              <li><button type="submit" class="waves-effect waves-light btn-small" style="margin-right:20px;">Logout</button></li>

    </form></li>
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
