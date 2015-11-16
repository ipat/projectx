

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

