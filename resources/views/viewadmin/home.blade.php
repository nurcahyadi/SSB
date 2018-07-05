@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
{{-- <div class="row">
  <div class="col s4 offset-s8">
    <nav>
      <div class="nav-wrapper">
        <form>
          <div class="input-field grey darken-4">
            <input id="search" type="search" placeholder="Search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
          </div>
        </form>
      </div>
    </nav>
  </div>
</div> --}}


  <table id="table_id" class="display">
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
                                 &nbsp;
                    <a href="{{route('useredit',['useredit'=>$value->id])}}"><button class="btn btn-warning btn-small">Edit</button></a>
                                &nbsp;

                                <form action="/delete/{{$value->id}}" method="post">
                                                      {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-small red accent-4">Delete</button>
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

        {{-- <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table> --}}


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

</script>
@endsection
