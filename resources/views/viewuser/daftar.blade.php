@extends('tamplatetampilan')
@include('header')
@section('isi')
@include('slider')
<br>

<div class="row">
    <form class="card col s6 offset-s3" action="/pendaftaran" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s6">
          <input name="nama_lengkap" type="text" class="validate" required>
          <label >Nama Lengkap*</label>
        </div>
        <div class="input-field col s6">
          <input name="NISN" type="text" class="validate">
          <label >NISN</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="tempat_lahir" type="text" class="validate" required>
          <label>Tempat Lahir*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="tanggal_lahir" type="text" class="datepicker" required>
          <label>Tanggal Lahir*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="nama_ortu" type="text" class="validate" required>
          <label>Nama Orang Tua*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="pekerjaan_ortu" type="text" class="validate" required>
          <label>Pekerjaan Orang Tua*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">phone</i>
           <input name="phone" type="number" class="validate" required>
           <label>Telephone/No.Hp*</label>
         </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">email</i>
           <input name="email" type="email" class="validate">
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
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Pendaftar*" required>
        </div>
       </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="alamat_rumah" class="materialize-textarea" required></textarea>
          <label >Alamat Rumah*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="sekolah_asal" type="text" class="validate" required>
          <label>Asal Sekolah*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="alamat_sekolah" class="materialize-textarea" required></textarea>
          <label >Alamat Sekolah*</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="asal_ssb" type="text" class="validate">
          <label>Asal SSB</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6" >
      <select name="gol_darah" >
      <option value="" disabled selected>Choose your option</option>
      <option value="A">A</option>
      <option value="AB">AB</option>
      <option value="B">B</option>
      <option value="O">O</option>
    </select>
    <label>Golongan Darah*</label>
  </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input name="tinggi" type="text" class="validate" required>
          <label>Tinggi Badan(cm)*</label>
        </div>

        <div class="input-field col s6">
          <input name="berat" type="text" class="validate" required>
          <label>Berat Badan(Kg)*</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea name="penyakit" class="materialize-textarea" required></textarea>
          <label>Riwayat Penyakit*</label>
        </div>
      </div>

      <div class="row" hidden>
        <div class="file-field input-field col s12" >
          <div class="btn" >
            <span>File</span>
            <input name="kartu_keluarga" type="file" value="{{asset('storage/kartu_keluarga/delete.png')}}" >
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Pendaftar*" >
        </div>
       </div>
      </div>

      <div class="row" hidden>
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input name="akte_kelahiran" type="file" value="{{asset('storage/akte_kelahiran/delete.png')}}" >
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Pendaftar*" >
        </div>
       </div>
      </div>

      <div class="row" hidden>
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input name="rapot" type="file" value="{{asset('storage/rapot/delete.png')}}" >
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Pendaftar*" >
        </div>
       </div>
      </div>

<h5>Note: bagi field yang diberi tanda (*) wajib diisi</h5>
<br>
<div class="row">
  <div class="col s2 offset-s5">
    <button class="btn waves-effect waves-light" type="submit" name="action">Daftar
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
