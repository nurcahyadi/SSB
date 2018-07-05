@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/' .$aboutshow->foto_prestasi)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeaboutadmin')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Nama Prestasi</th>
                                          <td>{{$aboutshow->nama_prestasi}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tanggal Event</th>
                                          <td>{{$aboutshow->tanggal}}</td>
                                        </tr>
                                        <tr>
                                          <th>Deskripsi</th>
                                          <td>{{$aboutshow->deskripsi}}</td>
                                        </tr>


                                      </table>

      </div>

    </div>
@endsection
