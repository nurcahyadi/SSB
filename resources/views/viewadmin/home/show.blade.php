@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/'.$user->foto)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeadmin')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Nama</th>
                                          <td>{{$user->nama_lengkap}}</td>
                                        </tr>
                                        <tr>
                                          <th>NISN</th>
                                          <td>{{$user->NISN}}</td>
                                        </tr>
                                        <tr>
                                          <th>Email</th>
                                          <td>{{$user->email}} set</td>
                                        </tr>
                                        <tr>
                                          <th>Nama Orang Tua</th>
                                          <td>{{$user->nama_ortu}}</td>
                                        </tr>
                                        <tr>
                                          <th>Pekerjaan Orang Tua</th>
                                          <td>{{$user->pekerjaan_ortu}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tempat Lahir</th>
                                          <td>{{$user->tempat_lahir}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tanggal Lahir</th>
                                          <td>{{$user->tanggal_lahir}}</td>
                                        </tr>
                                        <tr>
                                          <th>No.Telepon</th>
                                          <td>{{$user->phone}}</td>
                                        </tr>
                                        <tr>
                                          <th>Alamat Rumah</th>
                                          <td>{{$user->alamat_rumah}}</td>
                                        </tr>
                                        <tr>
                                          <th>Asal Sekolah</th>
                                          <td>{{$user->sekolah_asal}}</td>
                                        </tr>
                                        <tr>
                                          <th>Alamat Sekolah</th>
                                          <td>{{$user->alamat_sekolah}}</td>
                                        </tr>
                                        <tr>
                                          <th>Asal SSB</th>
                                          <td>{{$user->asal_ssb}}</td>
                                        </tr>
                                        <tr>
                                          <th>Golongan Darah</th>
                                          <td>{{$user->gol_darah}}</td>
                                        </tr>
                                        <tr>
                                          <th>Tinggi Badan</th>
                                          <td>{{$user->tinggi}}</td>
                                        </tr>
                                        <tr>
                                          <th>Berat Badan</th>
                                          <td>{{$user->berat}}</td>
                                        </tr>
                                        <tr>
                                          <th>Penyakit</th>
                                          <td>{{$user->penyakit}}</td>
                                        </tr>
                                        <tr>
                                          <th>Kartu Keluarga</th>
                                          <td><img src="{{asset('storage/'.$user->kartu_keluarga)}}" style="width: 50px" ></td>
                                        </tr>
                                        <tr>
                                          <th>Akte Kelahiran</th>
                                          <td><img src="{{asset('storage/'.$user->akte_kelahiran)}}" style="width: 50px" ></td>
                                        </tr>
                                        <tr>
                                          <th>Rapot</th>
                                          <td><img src="{{asset('storage/'.$user->rapot)}}" style="width: 50px" ></td>
                                        </tr>


                                      </table>

      </div>

    </div>
@endsection
