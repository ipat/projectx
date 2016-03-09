

// var data = [
//     { "dep": "First Top", "name": "First child", "model": "value1", "size": "320" },
//     { "dep": "First Top", "name": "First child", "model": "value2", "size": "320" },
//     { "dep": "First Top", "name": "SECOND CHILD", "model": "value1", "size": "320" },
//     { "dep": "Ft Top"},
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
// อันนี้ใช้ได้แล้ว
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// var data = [
//  { "name" : "ABC", "parent":"DEF", "depth": 1 },
//  { "name" : "DEF", "parent":"null", "depth": 0 },
//  { "name" : "new_name", "parent":"ABC", "depth": 2 },
//  { "name" : "new_name2", "parent":"ABC", "depth": 2 },
//  { "name" : "Foo", "parent":"DEF", "depth": 2 },
//  { "name" : "Bar", "parent":"null", "depth": 2 }
// ];

// // create a name: node map
// var dataMap = data.reduce(function(map, node) {
//     map[node.name] = node;
//     return map;
// }, {});

// // create the tree array
// var tree = [];
// data.forEach(function(node) {
//     // add to parent
//     var parent = dataMap[node.parent];
//     if (parent) {
//         // create child array if it doesn't exist
//         (parent.children || (parent.children = []))
//             // add node to child array
//             .push(node);
//     } else {
//         // parent is null or missing
//         tree.push(node);
//     }
// });
// newdata = JSON.parse( newdata );
 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  var data = [
//  { "name" : "ABC", "parent":"DEF", "depth": 1 },
//  { "name" : "DEF", "parent":"null", "depth": 0 },
//  { "name" : "new_name", "parent":"ABC", "depth": 2 },
//  { "name" : "new_name2", "parent":"ABC", "depth": 2 },
//  { "name" : "Foo", "parent":"DEF", "depth": 2 },

// ];

// // create a name: node map
// var dataMap = data.reduce(function(map, node) {
//     map[node.name] = node;
//     return map;
// }, {});

// // create the tree array
// var t = [];
// data.forEach(function(node) {
//     // add to parent
//     var parent = dataMap[node.parent];
//     if (parent) {
//         // create child array if it doesn't exist
//         (parent.children || (parent.children = []))
//             // add node to child array
//             .push(node);
//     } else {
//         // parent is null or missing
//         t.push(node);
//     }
// });



// var width = 960,
//     height = 2200;

// var cluster = d3.layout.cluster()
//     .size([height, width - 160]);

// var svg = d3.select("body").append("svg")
//     .attr("width", width)
//     .attr("height", height)
//   .append("g")
//     .attr("transform", "translate(40,0)");

// d3.json( "/ProjectXX/public/genmap" , function(error, root) {
// if (error) throw error;
 

//   var nodes = cluster.nodes(root),
//       links = cluster.links(nodes);

//   var link = svg.selectAll(".link")
//       .data(links)
//     .enter().append("path")
//       .attr("class", "link")
//       .attr("d", function(d) {
//         return "M" + d.source.y + "," + d.source.x
//             + "C" + d.source.y + "," + d.source.x
//             + " " + d.source.y + "," + d.target.x
//             + " " + d.target.y + "," + d.target.x;
//       });

//   var node = svg.selectAll(".node")
//       .data(nodes)
//     .enter().append("g")
//       .attr("class", "node")
//       .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; })

//   node.append("circle")
//       .attr("r", 4.5);

//   node.append("text")
//       .attr("dx", function(d) { return d.children ? -8 : 8; })
//       .attr("dy", 3)
//       .style("text-anchor", function(d) { return d.children ? "end" : "start"; })
//       .text(function(d) { return d.name; });
// });

// d3.select(self.frameElement).style("height", height + "px");
// var treeData = [
//   {
//     "name": "Top Level",
//     "parent": "null",
//     "children": [
//       {
//         "name": "Level 2: A",
//         "parent": "Top Level",
//         "children": [
//           {
//             "name": "Son of A",
//             "parent": "Level 2: A"
//           },
//           {
//             "name": "Daughter of A",
//             "parent": "Level 2: A"
//           }
//         ]
//       },
//       {
//         "name": "Level 2: B",
//         "parent": "Top Level"
//       }
//     ]
//   }
// ];


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
/////////////////////////////////////////////////////////////////////////////////////////////
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

// //console.log(newData);
// root = newData;
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



var margin = {top: 20, right: 120, bottom: 20, left: 120},
    width = 960 - margin.right - margin.left,
    height = 800 - margin.top - margin.bottom;

var i = 0,
    duration = 750,
    root;

var tree = d3.layout.tree()
    .size([height, width]);

var diagonal = d3.svg.diagonal()
    .projection(function(d) { return [d.y, d.x]; });

var svg = d3.select(".graph").append("svg")
    .attr("width", width + margin.right + margin.left)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");



  root = t[0]; //ปัจจุบันให้ root เป็น t0 เพราะ เป็น object
  root.x0 = height / 2;
  root.y0 = 0;

  function collapse(d) {
    if (d.children) {
      d._children = d.children;
      d._children.forEach(collapse);
      d.children = null;
    }
  }


  root.children.forEach(collapse);
  update(root);


d3.select(self.frameElement).style("height", "800px");

function update(source) {

  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
      links = tree.links(nodes);

  // Normalize for fixed-depth.
  nodes.forEach(function(d) { d.y = d.depth * 180; });

  // Update the nodes…
  var node = svg.selectAll("g.node")
      .data(nodes, function(d) { return d.id || (d.id = ++i); });

  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
      .attr("class", "node")
          .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; });
      
      nodeEnter.append("circle")
          .attr("r", 1e-6)
          .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; }).on("click", click);

      nodeEnter.append("text")
          
          .attr("x", function(d) { return d.children || d._children ? -10 : 10; })
          .attr("dy", ".35em")
          .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
          .text(function(d) { return d.name; })
          .style("fill-opacity", 1e-6)
          .style('fill', 'white')
          .style("font-size","19px")
          .attr("class", "hyper").on("click", clack);

  // Transition nodes to their new position.
  var nodeUpdate = node.transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

  nodeUpdate.select("circle")
      .attr("r", 4.5)
      .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

  nodeUpdate.select("text")
      .style("fill-opacity", 1);

  // Transition exiting nodes to the parent's new position.
  var nodeExit = node.exit().transition()
      .duration(duration)
      .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
      .remove();

  nodeExit.select("circle")
      .attr("r", 1e-6);

  nodeExit.select("text")
      .style("fill-opacity", 1e-6);

  // Update the links…
  var link = svg.selectAll("path.link")
      .data(links, function(d) { return d.target.id; });

  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
      .attr("class", "link")
      .attr("d", function(d) {
        var o = {x: source.x0, y: source.y0};
        return diagonal({source: o, target: o});
      });

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
function clack(d) {
    
    window.location = "http://localhost:8888/projectxx/public/detail/"+d.link;
    // window.location = "{{ url('/detail/1') }}";
}

