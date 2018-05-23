@extends('tamplatetampilan')
@include('header')
@section('isi')
  @include('slider')
<br>
<div class="row">
  <div class="col s8 offset-s2">
     <img class="materialboxed" width="100%" height="500" src="image/sample1.jpg">

    <h3>SEKOLAH SEPAKBOLA</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
  </div>


  </div>

</div>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems, instances);
});
</script>
@endsection
@include('footer')
