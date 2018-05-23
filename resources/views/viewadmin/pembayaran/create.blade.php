@extends('tamplatetampilan')
@include('headeradmin')
@section('isi')

<div class="row">
  <form class="card col s6 offset-s3" action="{{route('statuspembayaran')}}" method="post">
      {{ csrf_field() }}
{{-- <input type="text" name="user_id" value="{{$user->id}}"> --}}
      {{-- <div class="input-field col s12 m6">
          <select class="icons">
            @foreach ($user as $index => $value)
            <option value="" disabled selected>Choose your option</option>
            <option value="" data-icon="{{asset('storage/'.$value->foto)}}">{{$value->nama_lengkap}}</option>
            @endforeach
          </select>
          <label>Images in select</label>
        </div> --}}


        {{-- <div class="row">
          <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
          </div>
        </div> --}}

        {{-- <div class="row">
          <div class="input-field col s12">
            <input name="nama_lengkap" type="text" class="validate">
            <label>Nama</label>
          </div>
        </div> --}}

      <div class="row">
        <div class="input-field col s12">
          <input name="tanggal_pembayaran" type="text" class="datepicker">
          <label>Tanggal Pembayaran</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="total_pembayaran" type="text" class="validate">
          <label>Total Pembayaran</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6" >
      <select name="status_pembayaran" >
      <option value="" disabled selected>Choose your option</option>
      <option value="Belum Bayar">Belum Bayar</option>
      <option value="Sudah Bayar">Sudah Bayar</option>
    </select>
    <label>Status Pembayaran</label>
  </div>

  <div class="row">
    <div class="col s2 offset-s5">
      <button class="btn waves-effect waves-light" type="submit" name="action">Save
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
