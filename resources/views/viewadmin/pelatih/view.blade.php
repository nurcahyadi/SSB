@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/' .$pelatih->foto)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homepelatihadmin')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Nama Lengkap</th>
                                          <td>{{$pelatih->nama_lengkap}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tempat Lahir</th>
                                          <td>{{$pelatih->tempat_lahir}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tanggal Lahir</th>
                                          <td>{{$pelatih->tanggal_lahir}}</td>
                                        </tr>
                                        <tr>
                                          <th>No.Telepon</th>
                                          <td>{{$pelatih->phone}}</td>
                                        </tr>
                                        <tr>
                                          <th>Email</th>
                                          <td>{{$pelatih->email}}</td>
                                        </tr>
                                        <tr>
                                          <th>Alamat Rumah</th>
                                          <td>{{$pelatih->alamat_rumah}}</td>
                                        </tr>


                                      </table>

      </div>

    </div>
@endsection
