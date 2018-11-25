@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')

  <div class="row">

  </div>

<br>
<div class="row">
  <div class="col s2 offset-s5">
    <a href="/pembayaran" class="waves-effect waves-light btn-small">Tambah</a>
  </div>
</div>


  <table id="table_id" class="display responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Tanggal Pembayaran</th>
                <th>Total Pembayaran</th>
                <th>Keterangan</th>
                <th>Status Pembayaran</th>
                <th>Keterangan Lain-lain</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($transaksi as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td>{{$value->user->nama_lengkap}}</td>
              <td>{{$value->user->tanggal_lahir}}</td>
              <td>{{$value->tanggal_pembayaran}}</td>
              <td>{{$value->total_pembayaran}}</td>
              <td>{{$value->keterangan}}</td>
              <td>{{$value->status_pembayaran}}</td>
              <td>{{$value->ket_lainlain}}</td>

              <td>
                <table>

                    <a href="{{route('transaksiedit',['transaksiedit'=>$value->id])}}"><button class="btn btn-warning">Edit</button></a>

                </table>

              </td>
            </tr>

              @endforeach
          </tbody>
        </table>


        <script type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

        </script>
@endsection
