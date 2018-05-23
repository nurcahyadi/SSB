@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
<br>
<div class="row">
<a href="/pembayaran" class="waves-effect waves-light btn-large col s2 offset-s5">Tambah</a>
</div>


  <table class="striped responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                {{-- <th>Email</th> --}}
                <th>Tanggal Pembayaran</th>
                <th>Total Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($transaksi as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td>{{$value->user->nama_lengkap}}</td>
              {{-- <td>{{$value->email}}</td> --}}
              <td>{{$value->tanggal_pembayaran}}</td>
              <td>{{$value->total_pembayaran}}</td>
              <td>{{$value->status_pembayaran}}</td>

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
