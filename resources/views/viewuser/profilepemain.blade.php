@extends('tamplatetampilan')
@include('header')
@section('isi')
  @include('slider')
<div class="row">
  <div class="col s4 right">
    <nav class="grey">
       <div class="nav-wrapper">
         <form>
           <div class="input-field">
             <input id="search" type="search" required placeholder="Search">
             <label class="label-icon" for="search"><i class="material-icons">search</i></label>
             <i class="material-icons">close</i>
           </div>
         </form>
       </div>
     </nav>
  </div>
</div>

<div class="row">
  <div class="col s6">

    <div class="card horizontal">
      <div class="card-image" >
        <img src="image/cr.jpg" height="250" >
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Khaerul Umam</p>
        </div>
        <div class="card-action">
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>

  <div class="col s6">

    <div class="card horizontal">
      <div class="card-image" >
        <img src="image/messi.jpg" height="250" >
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Muhammad Ikhsan Laisa</p>
        </div>
        <div class="card-action">
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@include('footer')
