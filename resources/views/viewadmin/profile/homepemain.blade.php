@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
<style media="screen">
  .margin{
    margin-top: 10px;
  }
</style>
<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


</head>
<div class="pad ">


  <table id="table_id" class="display responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th>No.Telepon</th>
                <th>Penyakit</th>
                <th>Action</th>
                <th>Konfirmasi</th>
                <th>Status</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($user as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td><img src="{{asset('storage/'.$value->foto)}}" style="width: 100px"></td>
              <td>{{$value->nama_lengkap}}</td>
              <td>{{$value->email}}</td>
              <td>{{$value->tanggal_lahir}}</td>
              <td>{{$value->phone}}</td>
              <td>{{$value->penyakit}}</td>

              <td>
                <table>
                    <a href="{{route('detailuser',['detailuser'=>$value->id])}}"><button class="btn btn-success btn-small green accent-4">Show</button></a>
                                 <br>
                    <a href="{{route('useredit',['useredit'=>$value->id])}}"><button class="btn btn-warning btn-small margin">Edit</button></a>
                                <br>

                                <form action="/delete/{{$value->id}}" method="post">
                                                      {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-small red accent-4 margin">Delete</button>
                                </form>
                </table>

              </td>
              <td>
                <table>
                  <form action="{{route('konfirmasi',['konfirmasi'=>$value->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                      <button class="btn btn-success btn-small green accent-4" >Setujui</button>
                  </form>


                </table>

              </td>
              <td>{{$value->status}}</td>
            </tr>

              @endforeach
          </tbody>
        </table>
</div>


<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );


swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});

$('#myTable').DataTable( {
    responsive: true
} );

</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
@endsection
