// var data = [
//     { "dep": "First Top", "name": "First child", "model": "value1", "size": "320" },
//     { "dep": "First Top", "name": "First child", "model": "value2", "size": "320" },
//     { "dep": "First Top", "name": "SECOND CHILD", "model": "value1", "size": "320" },
//     { "dep": "Second Top", "name": "First Child", "model": "value1", "size": "320" }
// ];

// var newData = { name :"root", children : [] },
//     levels = ["dep","name"];

// // For each data row, loop through the expected levels traversing the output tree
// data.forEach(function(d){
//     // Keep this as a reference to the current level
//     var depthCursor = newData.children;
//     // Go down one level at a time
//     levels.forEach(function( property, depth ){

//         // Look to see if a branch has already been created
//         var index;
//         depthCursor.forEach(function(child,i){
//             if ( d[property] == child.name ) index = i;
//         });
//         // Add a branch if it isn't there
//         if ( isNaN(index) ) {
//             depthCursor.push({ name : d[property], children : []});
//             index = depthCursor.length - 1;
//         }
//         // Now reference the new child array as we go deeper into the tree
//         depthCursor = depthCursor[index].children;
//         // This is a leaf, so add the last element to the specified branch
//         if ( depth === levels.length - 1 ) depthCursor.push({ name : d.model, size : d.size });
//     });
// });


// var data = data;

// create a name: node map
var dataMap = data.reduce(function(map, node) {
    map[node.name] = node;
    return map;
}, {});

// create the tree array
var t = [];
data.forEach(function(node) {
    // add to parent
    var parent = dataMap[node.parent];
    if (parent) {
        // create child array if it doesn't exist
        (parent.children || (parent.children = []))
            // add node to child array
            .push(node);
    } else {
        // parent is null or missing
        t.push(node);
    }
});


//to string

// function appendHtml(el, str) {
//   var div = document.createElement('div');
//   div.innerHTML = str;
//   while (div.children.length > 0) {
//     el.appendChild(div.children[0]);
//   }
// }

// console.log(JSON.stringify(t[0]));
// document.getElementById("show").innerHTML=JSON.stringify(t[0]);
// appendHtml(document.body, JSON.stringify(t[0]));









// document.body.innerHTML += "<span>" + t[0] + "</span>" ;


// ************** Generate the tree diagram  *****************
// var margin = {top: 20, right: 120, bottom: 20, left: 120},
//   width = 960 - margin.right - margin.left,
//   height = 500 - margin.top - margin.bottom;
  
// var i = 0,
//   duration = 750,
//   root;

// var tree = d3.layout.tree()
//   .size([height, width]);

// var diagonal = d3.svg.diagonal()
//   .projection(function(d) { return [d.y, d.x]; });

// var svg = d3.select("body").append("svg")
//   .attr("width", width + margin.right + margin.left)
//   .attr("height", height + margin.top + margin.bottom)
//   .append("g")
//   .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

// console.log(t[0]);
// root = t[0];
// root.x0 = height / 2;
// root.y0 = 0;
  
// update(root);

// d3.select(self.frameElement).style("height", "500px");

// function update(source) {

//   // Compute the new tree layout.
//   var nodes = tree.nodes(root).reverse(),
//     links = tree.links(nodes);

//   // Normalize for fixed-depth.
//   nodes.forEach(function(d) { d.y = d.depth * 180; });

//   // Update the nodes…
//   var node = svg.selectAll("g.node")
//     .data(nodes, function(d) { return d.id || (d.id = ++i); });

//   // Enter any new nodes at the parent's previous position.
//   var nodeEnter = node.enter().append("g")
//     .attr("class", "node")
//     .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
//     .on("click", click);

//   nodeEnter.append("circle")
//     .attr("r", 1e-6)
//     .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

//   nodeEnter.append("text")
//     .attr("x", function(d) { return d.children || d._children ? -13 : 13; })
//     .attr("dy", ".35em")
//     .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
//     .text(function(d) { return d.name; })
//     .style("fill-opacity", 1e-6);

//   // Transition nodes to their new position.
//   var nodeUpdate = node.transition()
//     .duration(duration)
//     .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

//   nodeUpdate.select("circle")
//     .attr("r", 10)
//     .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

//   nodeUpdate.select("text")
//     .style("fill-opacity", 1);

//   // Transition exiting nodes to the parent's new position.
//   var nodeExit = node.exit().transition()
//     .duration(duration)
//     .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
//     .remove();

//   nodeExit.select("circle")
//     .attr("r", 1e-6);

//   nodeExit.select("text")
//     .style("fill-opacity", 1e-6);

//   // Update the links…
//   var link = svg.selectAll("path.link")
//     .data(links, function(d) { return d.target.id; });

//   // Enter any new links at the parent's previous position.
//   link.enter().insert("path", "g")
//     .attr("class", "link")
//     .attr("d", function(d) {
//     var o = {x: source.x0, y: source.y0};
//     return diagonal({source: o, target: o});
//     });

//   // Transition links to their new position.
//   link.transition()
//     .duration(duration)
//     .attr("d", diagonal);

//   // Transition exiting nodes to the parent's new position.
//   link.exit().transition()
//     .duration(duration)
//     .attr("d", function(d) {
//     var o = {x: source.x, y: source.y};
//     return diagonal({source: o, target: o});
//     })
//     .remove();

//   // Stash the old positions for transition.
//   nodes.forEach(function(d) {
//   d.x0 = d.x;
//   d.y0 = d.y;
//   });
// }

// // Toggle children on click.
// function click(d) {
//   if (d.children) {
//   d._children = d.children;
//   d.children = null;
//   } else {
//   d.children = d._children;
//   d._children = null;
//   }
//   update(d);
// }


/////////////////////////////////////////////////


var margin = {top: 30, right: 20, bottom: 30, left: 20},
    width = 960 - margin.left - margin.right,
    barHeight = 20,
    barWidth = width * .8;

var i = 0,
    duration = 400,
    root;

var tree = d3.layout.tree()
    .nodeSize([0, 20]);

var diagonal = d3.svg.diagonal()
    .projection(function(d) { return [d.y, d.x]; });

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


  t[0].x0 = 0;
  t[0].y0 = 0;
  update(root = t[0]);


function update(source) {

  // Compute the flattened node list. TODO use d3.layout.hierarchy.
  var nodes = tree.nodes(root);

  var height = Math.max(500, nodes.length * barHeight + margin.top + margin.bottom);

  d3.select("svg").transition()
      .duration(duration)
      .attr("height", height);

  d3.select(self.frameElement).transition()
      .duration(duration)
      .style("height", height + "px");

  // Compute the "layout".
  nodes.forEach(function(n, i) {
    n.x = i * barHeight;
  });

  // Update the nodes…
  var node = svg.selectAll("g.node")
      .data(nodes, function(d) { return d.id || (d.id = ++i); });

  var nodeEnter = node.enter().append("g")
      .attr("class", "node")
      .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
      .style("opacity", 1e-6);

  // Enter any new nodes at the parent's previous position.
  nodeEnter.append("rect")
      .attr("y", -barHeight / 2)
      .attr("height", barHeight)
      .attr("width", barWidth)
      .style("fill", color)
      .on("click", click);

  nodeEnter.append("text")
      .attr("dy", 3.5)
      .attr("dx", 5.5)
      .text(function(d) { return d.name; });
      

  // Transition nodes to their new position.
  nodeEnter.transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; })
      .style("opacity", 1);

  node.transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; })
      .style("opacity", 1)
    .select("rect")
      .style("fill", color);

  // Transition exiting nodes to the parent's new position.
  node.exit().transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
      .style("opacity", 1e-6)
      .remove();

  // Update the links…
  var link = svg.selectAll("path.link")
      .data(tree.links(nodes), function(d) { return d.target.id; });

  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
      .attr("class", "link")
      .attr("d", function(d) {
        var o = {x: source.x0, y: source.y0};
        return diagonal({source: o, target: o});
      })
    .transition()
      .duration(duration)
      .attr("d", diagonal);

  // Transition links to their new position.
  link.transition()
      .duration(duration)
      .attr("d", diagonal);

  // Transition exiting nodes to the parent's new position.
  link.exit().transition()
      .duration(duration)
      .attr("d", function(d) {
        var o = {x: source.x, y: source.y};
        return diagonal({source: o, target: o});
      })
      .remove();

  // Stash the old positions for transition.
  nodes.forEach(function(d) {
    d.x0 = d.x;
    d.y0 = d.y;
  });
}

// Toggle children on click.
function click(d) {
  if (d.children) {
    d._children = d.children;
    d.children = null;
  } else {
    d.children = d._children;
    d._children = null;
  }
  update(d);
}

function color(d) {
  return d._children ? "#3182bd" : d.children ? "#c6dbef" : "#fd8d3c";
}
function clack(d) {
    
    window.location = "http://localhost:8888/projectxx/public/detail/"+d.student_id;
    // window.location = "{{ url('/detail/1') }}";
}
