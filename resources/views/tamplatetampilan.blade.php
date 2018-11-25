<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- Compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css"> --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">



{{-- <!-—Compiled and minified Jquery  --> --}}
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    </head>


    <body>
      <style media="screen">
        .pad{
          padding-left: 50px;
          padding-right: 50px;
        }

      
      </style>

      <header>
        @yield('header')
      </header>
      <body>
        @yield('slider')
        @yield('isi')

      </body>
      <footer>
        @yield('footer')
      </footer>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

      {{-- sweetalert --}}
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

      {{-- datablesyagja --}}
      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
      @include('sweet::alert')
    </body>
  </html>
