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
  @foreach ($pemain as $value)
  <div class="col s6">

    <div class="card horizontal">
      <div class="card-image" >
        <img src="{{asset('storage/'.$value->foto)}}" height="250" >
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>Nama : {{$value->nama_lengkap}}</p>
          <p>Tempat Lahir : {{$value->tempat_lahir}}</p>
          <p>Tanggal Lahir : {{$value->tanggal_lahir}}</p>
        </div>
        <div class="card-action">
          <a href="#">Read More</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
</div>

@endsection
@include('footer')
