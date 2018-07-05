@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/' .$galleryshow->foto_gallery)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homegalleryadmin')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Nama Gallery</th>
                                          <td>{{$galleryshow->nama_gallery}}</td>
                                        </tr>
                                        <tr>
                                          <th>Deskripsi</th>
                                          <td>{{$galleryshow->deskripsi}}</td>
                                        </tr>


                                      </table>

      </div>

    </div>
@endsection
