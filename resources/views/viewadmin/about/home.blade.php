@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')

<div class="pad">
<a href="/toabout"> <button type="button" class="btn btn-primary" style="float: right; margin-right:20px; margin-top:20px;">Tambah</button></a>

  <table id="table_id" class="display responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Waktu</th>
                <th>Nama Prestasi</th>
                <th>Deskripsi</th>
                <th>Action</th>

            </tr>
          </thead>

          <tbody>
            @foreach ($prestasi as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td><img src="{{asset('storage/'.$value->foto_prestasi)}}" style="width: 100px"></td>
              <td>{{$value->tanggal}}</td>
              <td>{{$value->nama_prestasi}}</td>
              <td>{{$value->deskripsi}}</td>

              <td>
                <table>
                    <a href="{{route('detailabout',['aboutshow'=>$value->id])}}"><button class="btn btn-success btn-small green accent-4">Show</button></a>
                                 &nbsp;
                    <a href="{{route('editabout',['editabout'=>$value->id])}}"><button class="btn btn-warning btn-small">Edit</button></a>
                                &nbsp;

                                <form action="/deleteabout/{{$value->id}}" method="post">
                                                      {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-small red accent-4 margin">Delete</button>
                                </form>
                </table>

              </td>
            </tr>

              @endforeach
          </tbody>
        </table>

</div>

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endsection
