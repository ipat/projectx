@extends('app')

@section('content')  
<link rel="stylesheet" type="text/css" href="{{ url('css/d3Stylefull.css') }}">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script> -->



      
    <script src="{{ url('js/jquery-1.10.2.min.js.js') }}"></script>
    <script src="{{ url('js/d3.v3.min.js') }}"></script>
   
<body>
  <script type="text/javascript">

    var data = <?php
     echo json_encode($gendata);
    ?>;

    console.log(data);
</script>

    <footer class="panel-footer" style="background-color: rgba(0,0,0,0.6);">
      <p>© Nobpo Payomrat buit from<a href="http://getbootstrap.com">Bootstrap</a> <a href="https://">Larravel</a> and <a href="https://">D3</a></p>
      
    </footer>
    <div id="tree-container"></div>
</body>
      <!--     
        <div class="container">
         <div class="row">
           <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                 <div class="panel-heading">Tree Map</div>
                    <div class="panel-body">
                        <script src="{{ url('js/d3.min.js') }}"></script>
                        <script src="{{ url('js/d3Script.js') }}"></script>
           
                    </div>
              </div>
            </div>
         </div>
      </div>
  -->

<script src="{{ url('js/dndtree2.js') }}"></script>

@endsection
