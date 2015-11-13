@extends('app')

@section('content')  

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script> -->

        
        <div class="container">
         <div class="row">
           <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                 <div class="panel-heading">Tree Map</div>
                    <div class="panel-body">
                         <iframe sandbox="allow-scripts allow-forms allow-same-origin" src="http://localhost:8888/projectxx/public/mapp" marginleft="20" width="100%" height="300" marginwidth="20" marginheight="0" scrolling="no"></iframe>
          
           
                    </div>
              </div>
            </div>
         </div>
      </div>



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
