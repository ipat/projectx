@extends('app')

@section('content')  
<link rel="stylesheet" type="text/css" href="{{ url('css/d3Stylefull.css') }}">
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script> -->



      
    <script src="{{ url('js/jquery-1.10.2.min.js.js') }}"></script>
    <script src="{{ url('js/d3.v3.min.js') }}"></script>
    <script src="{{ url('js/dndtree.js') }}"></script>
<body>
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



@endsection
