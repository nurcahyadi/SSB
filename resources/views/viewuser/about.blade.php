@extends('tamplatetampilan')
@include('header')
@section('isi')
  <style>
     /* Set the size of the div element that contains the map */
     #map {
       height: 610px;  /* The height is 400 pixels */
       width: 100%;  /* The width is the width of the web page */

      }
      .article-row {
           margin-bottom: 10% !important;
       }

       .article-card {
           height: 470px;
           position: relative;

       }
       .article-card-center {
           margin-left: auto;
       }

       .article-name {
           font-size: 32px;
           margin-bottom:0;
           margin-left: auto;
       }
       .paragraf {
           margin-bottom:0;
           margin-left: auto;
           margin-right: auto;
       }

       .article-card-right-name {
           background: #fff;
           height: 100px;
           position: absolute;
           z-index: 2;
           bottom: 0;
           left: 0 !important;
       }

       .article-card-left-name {

           background: #fff;
           height: 500px;
           margin-top: 50px;
           margin-left: auto;
           margin-right: auto;
           position: absolute;
           z-index: 2;




       }

       .article-card-right-image {
           height: 400px !important;
           position: absolute;
           z-index: 1;
           right: 0;
       }

       .article-card-left-image {
           height: 400px !important;
           position: absolute;
           z-index: 1;
           left: 0;
       }
   </style>


         <!--The div element for the map -->

           <div class="row article-row">
               <div class="col s12 article-card">
                   <div class="col s4 offset-s7 article-card-left-name">
                       <p class="article-name">Bandung, Jawa Barat</p>
                         <h6 class="paragraf">Email</h6>
                         <p class="paragraf">official@ssbmutiara97.com
                           <br> sekolahbolamutiara97kotabogor@gmail.com</p>
                         <br>
                         <h6 class="paragraf">Telp/HP/WA</h6>
                         <p class="paragraf">0811110072 <br> 0812121212 <br> 081283349450 <br> 085777151315</p>
   <br>
                       <p class="paragraf">Alamat Sekretariat</p>
                       <p class="paragraf">Jl. Manunggal dh. Win Sport depan SMAN 5 Kota Bogor
Kp. Sawah ilir Rt 01/04 Desa Mekar Jaya Kec. Ciomas Bogor</p>

                   </div>

                   <div id="map">

                   </div>
               </div>
           </div>



           


         <script>
     // Initialize and add the map
     function initMap() {
       // The location of Uluru
       var uluru = {lat: -6.5854607, lng: 106.7838908};
       // The map, centered at Uluru
       var map = new google.maps.Map(
           document.getElementById('map'), {zoom: 18, center: uluru});
       // The marker, positioned at Uluru
       var marker = new google.maps.Marker({position: uluru, map: map});
     }
         </script>
         <!--Load the API from the specified URL
         * The async attribute allows the browser to render the page while the API loads
         * The key parameter will contain your own API key (which is not needed for this tutorial)
         * The callback parameter executes the initMap() function
         -->
         <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDuA6ClJJeW4ulnbedQ2tJ1lpyOBjZG-E&callback=initMap">
         </script>
   @endsection

@include('footer')
