@extends('tamplatetampilan')
@include('header')
@section('isi')
  @include('slider')
<div class="row">
  @foreach ($gallery as $value)


  <div class="col s3">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="{{asset('storage/'.$value->foto_gallery)}}">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{$value->nama_gallery}}<i class="material-icons right">more_vert</i></span>
        <p><a href="#">Read More</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">{{$value->nama_gallery}}<i class="material-icons right">close</i></span>
        <p>{{$value->deskripsi}}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>


@endsection
@include('footer')
