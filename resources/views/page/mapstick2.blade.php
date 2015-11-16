@extends('app')

@section('content')  
 <link rel="stylesheet" type="text/css" href="{{ url('css/d3Style.css') }}"> 
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script> -->


<!-- 
       <script src="{{ url('js/d3.min.js') }}"></script>
       <script src="{{ url('js/d3Scriptstick2.js') }}"></script>
    -->
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

<body>
<script src="{{ url('js/d3.min.js') }}"></script>
<script src="{{ url('js/d3Sstick2.js') }}"></script>


<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Home</div>

        <div class="panel-body">
          You are logged in!
          <ul>
            <li><a href="{{ url('detail/1') }}">physic</a></li>

          </ul> 
        </div>

      </div>


        <div class="panel panel-default">
            <div class="panel-heading">Interesting</div>

              <div class="panel-body">
              <div class="quote">{{ Inspiring::quote() }}</div>
              <ul>
              <li><a href="{{ url('detail/1') }}">physic</a></li>

              </ul> 
            </div>

        </div>





      
    </div>
  </div>
</div>

@endsection
