@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
  <table class="striped responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>No.Telepon</th>
                <th>Foto</th>
                <th>Penyakit</th>
                <th>Kelas</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($user as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td>{{$value->nama_lengkap}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->tanggal_lahir}}</td>
              <td>{{$value->phone}}</td>
              <td><img src="{{asset('storage/'.$value->foto)}}" style="width: 100px"></td>
              <td>{{$value->penyakit}}</td>
              <td>{{$value->kelas}}</td>
              <td>
                <table>
                    <a href=""><button class="btn btn-success">Show</button></a>
                                 &nbsp;
                    <a href=""><button class="btn btn-warning">Edit</button></a>
                                &nbsp;
                    <form action="" method="post">
                                          {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                            <button class="btn btn-danger">Delete</button>
                    </form>
                </table>

              </td>
            </tr>

              @endforeach
          </tbody>
        </table>
@endsection
