@section('header')
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="{{route('profpemain')}}">Pelatih</a></li>
    <li><a href="{{route('profpelatih')}}">Pemain</a></li>
  </ul>


  <nav class="blue-grey darken-4">
    <div class="nav-wrapper">

      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('homeadmin')}}" ><i class="material-icons left">home</i>Home</a></li>
        <li><a href="{{route('gallery')}}"><i class="material-icons left">collections</i>Gallery</a></li>
        <li><a class="dropdown-trigger" data-target="dropdown1">Profile<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{{route('about')}}" ><i class="material-icons left">info</i>About</a></li>
        <li><a href="{{route('homepembayaran')}}">Pembayaran</a></li>
        <li>
        <form  action="{{route('logout')}}" method="post">
                {{ csrf_field() }}
                {{-- <a type="sumbit">Logout</a> --}}
                  <a><button type="submit" class="waves-effect waves-light btn-small">Logout</button></a>

        </form></li>
      </ul>
    </div>
  </nav>


  <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, instances);
});
  </script>
@endsection
