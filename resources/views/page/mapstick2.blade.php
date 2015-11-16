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
<!-- <script src="{{ url('js/d3Sstick2.js') }}"></script> -->
<script>

var width = 960,
    height = 2200;

var cluster = d3.layout.cluster()
    .size([height, width - 160]);

var svg = d3.select("body").append("svg")
    .attr("width", width)
    .attr("height", height)
  .append("g")
    .attr("transform", "translate(40,0)");

d3.json("/ProjectXX/flare.json", function(error, root) {
  if (error) throw error;

  var nodes = cluster.nodes(root),
      links = cluster.links(nodes);

  var link = svg.selectAll(".link")
      .data(links)
    .enter().append("path")
      .attr("class", "link")
      .attr("d", function(d) {
        return "M" + d.source.y + "," + d.source.x
            + "C" + d.source.y + "," + d.source.x
            + " " + d.source.y + "," + d.target.x
            + " " + d.target.y + "," + d.target.x;
      });

  var node = svg.selectAll(".node")
      .data(nodes)
    .enter().append("g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; })

  node.append("circle")
      .attr("r", 4.5);

  node.append("text")
      .attr("dx", function(d) { return d.children ? -8 : 8; })
      .attr("dy", 3)
      .style("text-anchor", function(d) { return d.children ? "end" : "start"; })
      .text(function(d) { return d.name; });
});

d3.select(self.frameElement).style("height", height + "px");

</script>




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