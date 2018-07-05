@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')

<div class="row">
  <form class="card col s6 offset-s3" action="{{route('updatetransaksi',['transaksiedit'=>$transaksiedit->id])}}" method="post">
      {{ csrf_field() }}
{{-- <input type="text" name="user_id" value="{{$user->id}}"> --}}
        <input type="hidden" name="_method" value="PUT">


      <div class="row">
        <div class="input-field col s12">
          <input name="tanggal_pembayaran" type="text" class="datepicker" value="{{$transaksiedit->tanggal_pembayaran}}">
          <label>Tanggal Pembayaran</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="total_pembayaran" type="number" class="validate" value="{{$transaksiedit->total_pembayaran}}">
          <label>Total Pembayaran</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6" >
      <select name="status_pembayaran" >
      <option value="{{$transaksiedit->id}}" disabled selected>{{$transaksiedit->status_pembayaran}}</option>
      <option value="Belum Bayar">Belum Bayar</option>
      <option value="Sudah Bayar">Sudah Bayar</option>
    </select>
    <label>Status Pembayaran</label>
    </div>

    <div class="input-field col s6" >
  <select name="keterangan" >
  <option value="{{$transaksiedit->id}}" disabled selected>{{$transaksiedit->keterangan}}</option>
  <option value="Pendaftaran">Pendaftaran</option>
  <option value="Bulanan">Bulanan</option>
  <option value="Kaos">Kaos</option>
</select>
<label>Keterangan</label>
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
