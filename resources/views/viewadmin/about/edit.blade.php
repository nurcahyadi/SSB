@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')
  <div class="row">
      <form class="card col s6 offset-s3" action="{{route('updateabout',['editabout'=>$editabout->id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
          <div class="input-field col s12">
            <input name="nama_prestasi" type="text" class="validate" value="{{$editabout->nama_prestasi}}" required>
            <label>Nama Prestasi</label>
          </div>
        </div>

          <div class="row">
            <div class="input-field col s12">
              <input name="tanggal" type="text" class="datepicker" value="{{$editabout->tanggal}}" required>
              <label>Tanggal Event</label>
            </div>
          </div>

        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>File</span>
              <input name="foto_prestasi" type="file" >
            </div>
            <div class="file-path-wrapper">
             <input class="file-path validate"  type="text" placeholder="Masukan Foto Prestasi">
          </div>
         </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea name="deskripsi" class="materialize-textarea" required>{{$editabout->deskripsi}}</textarea>
            <label>Deskripsi</label>
          </div>
        </div>



  <div class="row">
    <div class="col s2 offset-s5">
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          <i class="material-icons right">send</i>
        </button>
    </div>
  </div>

      </form>
    </div>




      <script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.datepicker');
      var instances = M.Datepicker.init(elems, instances);
    });

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, instances);
    });
      </script>
@endsection
