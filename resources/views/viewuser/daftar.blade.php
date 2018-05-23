@extends('tamplatetampilan')
@include('header')
@section('isi')
@include('slider')
<br>

<div class="row">
    <form class="card col s6 offset-s3" action="/pendaftaran" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12">
          <input name="nama_lengkap" type="text" class="validate">
          <label >Nama Lengkap</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="tempat_lahir" type="text" class="validate">
          <label>Tempat Lahir</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="tanggal_lahir" type="text" class="datepicker">
          <label>Tanggal Lahir</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="nama_ortu" type="text" class="validate">
          <label>Nama Orang Tua</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="pekerjaan_ortu" type="text" class="validate">
          <label>Pekerjaan Orang Tua</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">phone</i>
           <input name="phone" type="number" class="validate">
           <label>Telephone</label>
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
            <input name="foto" type="file">
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Pendaftar">
        </div>
       </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="alamat_rumah" class="materialize-textarea"></textarea>
          <label >Alamat Rumah</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="sekolah_asal" type="text" class="validate">
          <label>Asal Sekolah</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="alamat_sekolah" class="materialize-textarea"></textarea>
          <label >Alamat Sekolah</label>
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
    <label>Golongan Darah</label>
  </div>


  <div class="input-field col s6">
<select name="kelas" >
<option value="" disabled selected>Choose your option</option>
<option value="Senin (15.00-18.00)">Senin (15.00-18.00)</option>
<option value="Sabtu (07.00-10.00)">Sabtu (07.00-10.00)</option>
<option value="Minggu (15.00-18.00)">Minggu (15.00-18.00)</option>
</select>
<label>Kelas Latihan</label>
</div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <input name="tinggi" type="text" class="validate">
          <label>Tinggi Badan</label>
        </div>

        <div class="input-field col s6">
          <input name="berat" type="text" class="validate">
          <label>Berat Badan</label>
        </div>
      </div>


      <div class="row">
        <div class="input-field col s12">
          <textarea name="penyakit" class="materialize-textarea"></textarea>
          <label >Penyakit</label>
        </div>
      </div>


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
@include('footer')
