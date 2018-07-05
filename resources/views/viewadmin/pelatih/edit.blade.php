@extends('tamplatetampilan')
@include('header')
@section('isi')
<br>

<div class="row">
    <form class="card col s6 offset-s3" action="{{route('updatepelatih',['pelatih'=>$pelatih->id])}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12">
          <input name="nama_lengkap" type="text" class="validate" value="{{$pelatih->nama_lengkap}}" required>
          <label >Nama Lengkap*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="tempat_lahir" type="text" class="validate" value="{{$pelatih->tempat_lahir}}" required>
          <label>Tempat Lahir*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="tanggal_lahir" type="text" class="datepicker" value="{{$pelatih->tanggal_lahir}}" required>
          <label>Tanggal Lahir*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">phone</i>
           <input name="phone" type="number" class="validate" value="{{$pelatih->phone}}" required>
           <label>Telephone/No.Hp*</label>
         </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
           <input name="email" type="email" class="validate" value="{{$pelatih->email}}">
           <label>Email</label>
         </div>
      </div>

      <div class="row">
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input name="foto" type="file" value="{{asset('storage/foto/avatar.png')}}" >
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Pelatih*" >
        </div>
       </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="alamat_rumah" class="materialize-textarea" required>{{$pelatih->alamat_rumah}}</textarea>
          <label >Alamat Rumah*</label>
        </div>
      </div>
<h5>Note: bagi field yang diberi tanda (*) wajib diisi</h5>
<br>
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
// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.datepicker');
//     var instances = M.Datepicker.init(elems, instances);
//   });
$(document).ready(function(){
    $('.datepicker').datepicker();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, instances);
  });
    </script>
@endsection
@include('footer')
