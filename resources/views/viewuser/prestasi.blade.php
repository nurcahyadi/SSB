@extends('tamplatetampilan')
@include('header')
@section('isi')
  @include('slider')

  @foreach ($prestasi as $index => $value)
    @if ($index % 2 == 0)

  <div class="row" style="margin-left:50px; margin-right:50px;">

    <div class="col s3" style="margin-top:50px; ">
      <img src="{{asset('storage/'.$value->foto_prestasi)}}" class="responsive-img" style="height:300px; width:330px;">
    </div>


  <div class="col s9" style="margin-top:50px; text-align:left;">
    <h5>{{$value->nama_prestasi}}</h5>
    <p>{{$value->tanggal}}</p>
    <p>{{$value->deskripsi}}</p>
  </div>



</div>
@else

  <div class="row" style="margin-right:50px; margin-left:50px;">

  <div class="col s9" style="margin-top:50px; text-align:right;">
    <h5>{{$value->nama_prestasi}}</h5>
    <p>{{$value->tanggal}}</p>
    <p>{{$value->deskripsi}}</p>
  </div>

  <div class="col s3" style="margin-top:50px;">
    <img src="{{asset('storage/'.$value->foto_prestasi)}}" class="responsive-img" style="height:300px; width:330px;">
  </div>

</div>
 @endif
@endforeach

@endsection
