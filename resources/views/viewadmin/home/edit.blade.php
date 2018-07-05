@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')

  <div class="row">
      <form class="card col s6 offset-s3" action="{{route('updateuser',['useredit'=>$useredit->id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
          <div class="input-field col s6">
            <input name="nama_lengkap" type="text" class="validate" value="{{$useredit->nama_lengkap}}" required>
            <label>Nama Lengkap</label>
          </div>


          <div class="input-field col s6">
            <input name="NISN" type="text" class="validate" value="{{$useredit->NISN}}">
            <label>NISN</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="tempat_lahir" type="text" class="validate" value="{{$useredit->tempat_lahir}}" required>
            <label>Tempat Lahir</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="tanggal_lahir" type="text" class="datepicker" value="{{$useredit->tanggal_lahir}}" required>
            <label>Tanggal Lahir</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="nama_ortu" type="text" class="validate" value="{{$useredit->nama_ortu}}" required>
            <label>Nama Orang Tua</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="pekerjaan_ortu" type="text" class="validate" value="{{$useredit->pekerjaan_ortu}}" required>
            <label>Pekerjaan Orang Tua</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
             <i class="material-icons prefix">phone</i>
             <input name="phone" type="number" class="validate" value="{{$useredit->phone}}" required>
             <label>Telephone</label>
           </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
             <i class="material-icons prefix">email</i>
             <input name="email" type="email" class="validate" value="{{$useredit->email}}">
             <label>Email</label>
           </div>
        </div>

        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>File</span>
              <input name="foto" type="file" >
            </div>
            <div class="file-path-wrapper">
             <input class="file-path validate"  type="text" placeholder="Masukan Foto Pendaftar">
          </div>
         </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea name="alamat_rumah" class="materialize-textarea" required>{{$useredit->alamat_rumah}}</textarea>
            <label >Alamat Rumah</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="sekolah_asal" type="text" class="validate" value="{{$useredit->sekolah_asal}}" required>
            <label>Asal Sekolah</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <textarea name="alamat_sekolah" class="materialize-textarea" required>{{$useredit->alamat_sekolah}}</textarea>
            <label >Alamat Sekolah</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="asal_ssb" type="text" class="validate" value="{{$useredit->asal_ssb}}">
            <label>Asal SSB</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6" >
        <select name="gol_darah" >
        <option value="{{$useredit->gol_darah}}" disabled selected>{{$useredit->gol_darah}}</option>
        <option value="A">A</option>
        <option value="AB">AB</option>
        <option value="B">B</option>
        <option value="O">O</option>
      </select>
      <label>Golongan Darah</label>
    </div>
        </div>

        <div class="row">
          <div class="input-field col s6">
            <input name="tinggi" type="text" class="validate" value="{{$useredit->tinggi}}" required>
            <label>Tinggi Badan</label>
          </div>

          <div class="input-field col s6">
            <input name="berat" type="text" class="validate" value="{{$useredit->berat}}" required>
            <label>Berat Badan</label>
          </div>
        </div>


        <div class="row">
          <div class="input-field col s12">
            <textarea name="penyakit" class="materialize-textarea" required>{{$useredit->penyakit}}</textarea>
            <label >Riwayat Penyakit</label>
          </div>
        </div>

        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>File</span>
              <input name="kartu_keluarga" type="file" >
            </div>
            <div class="file-path-wrapper">
             <input class="file-path validate"  type="text" placeholder="Masukan Foto Kartu Keluarga">
          </div>
         </div>
        </div>

        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>File</span>
              <input name="akte_kelahiran" type="file" >
            </div>
            <div class="file-path-wrapper">
             <input class="file-path validate"  type="text" placeholder="Masukan Foto Akte Kelahiran">
          </div>
         </div>
        </div>

        <div class="row">
          <div class="file-field input-field col s12">
            <div class="btn">
              <span>File</span>
              <input name="rapot" type="file" >
            </div>
            <div class="file-path-wrapper">
             <input class="file-path validate"  type="text" placeholder="Masukan Foto Rapot">
          </div>
         </div>
        </div>


  <div class="row">
    <div class="col s2 offset-s5">
      <button class="btn waves-effect waves-light" type="submit" name="action">Update
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
