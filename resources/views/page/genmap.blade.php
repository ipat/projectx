<!-- <html> -->
@extends('app')

@section('content')  
<meta charset="utf-8">
<style>

.node rect {
  cursor: pointer;
  fill: #fff;
  fill-opacity: .5;
  stroke: #3182bd;
  stroke-width: 1.5px;
}

.node text {
  font: 10px sans-serif;
  pointer-events: none;
}

path.link {
  fill: none;
  stroke: #9ecae1;
  stroke-width: 1.5px;
}

</style>
<script src="{{ url('js/d3.min.js') }}"></script>
<script type="text/javascript">

    var data = <?php
     echo json_encode($gendata);
    ?>;

    console.log(data);
</script>
<script src="{{ url('js/jsoncreate.js') }}"></script>
@endsection


<!-- <body>
    <span id="show"></span>
<script src="{{ url('js/jsoncreate.js') }}"></script>
</body>
</html> -->
