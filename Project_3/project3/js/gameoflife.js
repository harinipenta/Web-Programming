var gen1=1;
var gen2=1;
var gen3=1;
var gen4=1;
var pop1=7;
var pop2=6;
var pop3=56;
var pop4=9;
var countalive=0;
var count1=0;
var count2=0;
var count3=0;
var count4=0;
var updated_count=0;
var GameOfLife = function(params){
  // User-set params
  var num_cells_y = params["init_cells"].length,
      num_cells_x = params["init_cells"][0].length,
      cell_width  = params["cell_width"]  || 10,
      cell_height = params["cell_height"] || 10,
      init_cells  = params["init_cells"]  || [],
      canvas_id   = params["canvas_id"]   || "life",

      colourful   = params["colourful"] || params["colorful"] || false,

      cell_array = [],
      
      display     = new GameDisplay(num_cells_x, num_cells_y, cell_width, cell_height, canvas_id, colourful),
      interval = null,    // Will store reference to setInterval method -- this should maybe be part of GameDisplay
      init        = function() {
        // Convert init_cells array of 0's and 1's to actual Cell objects
        var length_y = init_cells.length,
            length_x,
            y, x;
        // each row
        for (y = 0; y < length_y; y++) {
          length_x = init_cells[y].length;
          // each column in rows
          for (x = 0; x < length_x; x++) {
            var state = (init_cells[y][x] == 1) ? 'alive' : 'dead';
            init_cells[y][x] = new Cell(x, y, state);
          }
        }
        cell_array = init_cells;
        display.update(cell_array);
      },
      // Function to calculate the next generation of cells, based
      //  on the rules of the Game of Life
      nextGenCells = function() {
      count2=0;
      count1=0;
      count3=0;
      count4=0;
      
		  if(canvas_id=="life-example1"){
			  //pop1=7;
			  gen1++;
			  var v = document.getElementsByClassName("generation1");
			  var u = document.getElementsByClassName("population1");
			var i = v.length;
			var j = u.length;
			console.log("length:"+i);
			while(i--)
			{
				v[i].innerHTML = gen1;
			}
			while(j--)
			{
				u[j].innerHTML = pop1;
			}
			
		  }
		  console.log(canvas_id);
		  if(canvas_id=="life-example2"){
			  //pop2;
			  gen2++;
			  var z = document.getElementsByClassName("generation2");
			 var w = document.getElementsByClassName("population2");
			var k = z.length;
			var l = w.length;
			
			while(k--)
			{
				z[k].innerHTML = gen2;
			}
			while(l--)
			{
				w[l].innerHTML = pop2;
			}
			
		  }
		  if(canvas_id=="life-example3"){
			  //pop2;
			  gen3++;
			  var a = document.getElementsByClassName("generation3");
			  var b = document.getElementsByClassName("population3");
			var c = a.length;
			var d = b.length;
			
			while(c--)
			{
				a[c].innerHTML = gen3;
			}
			while(d--)
			{
				b[d].innerHTML = pop3;
			}
			
		  }
		  if(canvas_id=="life-example4"){
			  //pop2;
			  gen4++;
			  var e = document.getElementsByClassName("generation4");
			  var f = document.getElementsByClassName("population4");
			var g = e.length;
			var h= f.length;
			
			while(g--)
			{
				e[g].innerHTML = gen4;
			}
			while(h--)
			{
				f[h].innerHTML = pop4;
			}
			
		  }
		  
        // Implement the Game of Life rules
        // Simple algorithm:
        //  - For each cell:
        //      - Check all of its 
        //      - Based on the rules, set the next gen cell to alive or dead
        console.log(canvas_id);
        
        var current_gen = cell_array,
            next_gen = [],      // New array to hold the next gen cells
            length_y = cell_array.length,
            length_x,
            y, x;
            
        // each row
        for (y = 0; y < length_y; y++) {
          length_x = current_gen[y].length;
          next_gen[y] = []; // Init new row
          // each column in rows
          for (x = 0; x < length_x; x++) {
            //var state = (init_cells[y][x] == 1) ? 'alive' : 'dead';
            var cell = current_gen[y][x];
            // Calculate above/below/left/right row/column values
            var row_above = (y-1 >= 0) ? y-1 : length_y-1; // If current cell is on first row, cell "above" is the last row (stitched)
            var row_below = (y+1 <= length_y-1) ? y+1 : 0; // If current cell is in last row, then cell "below" is the first row
            var column_left = (x-1 >= 0) ? x-1 : length_x - 1; // If current cell is on first row, then left cell is the last row
            var column_right = (x+1 <= length_x-1) ? x+1 : 0; // If current cell is on last row, then right cell is in the first row

            var neighbours = {
              top_left: current_gen[row_above][column_left].clone(),
              top_center: current_gen[row_above][x].clone(),
              top_right: current_gen[row_above][column_right].clone(),
              left: current_gen[y][column_left].clone(),
              right: current_gen[y][column_right].clone(),
              bottom_left: current_gen[row_below][column_left].clone(),
              bottom_center: current_gen[row_below][x].clone(),
              bottom_right: current_gen[row_below][column_right].clone()
            };

            var alive_count=0;
            var dead_count = 0;
            for (var neighbour in neighbours) {
              if (neighbours[neighbour].getState() == "dead") {
                dead_count++;
              } else {
                alive_count++;
			}
	        }
			console.log(alive_count);
			
			//$('#population1').text(population1);
			//document.getElementsByClassName("population1").innerHTML = 7;
			//document.getElementsByClassName("generation1").innerHTML 
			
            // Set new state to current state, but it may change below
            var new_state = cell.getState();
            if (cell.getState() == "alive") {
              if (alive_count < 2 || alive_count > 3) {
                // new state: dead, overpopulation/ underpopulation
                new_state = "dead";
              } else if (alive_count === 2 || alive_count === 3) {
                // lives on to next generation
                new_state = "alive";
              }
            } else {
              if (alive_count === 3) {
                // new state: live, reproduction
                new_state = "alive";
              }
            }

            //console.log("Cell at x,y: " + x + "," + y + " has dead_count: " + dead_count + "and alive_count: " + alive_count);
        
            next_gen[y][x] = new Cell(x, y, new_state);
            //console.log(next_gen[y][x]);
          }
        }
        //console.log(next_gen);
/*
        
        
*/     
		
       //console.log("count"+count);
        return next_gen;
      }
  ;
  init();
  return {
    // Returns the next generation array of cells
    step: function(){
      var next_gen = nextGenCells();
    
      // Set next gen as current cell array
      cell_array = next_gen;
      //console.log(next_gen);
      display.update(cell_array);
    },
    step2: function(){
     for(i=0;i<23;i++){
      var next_gen = nextGenCells();
      }
      // Set next gen as current cell array
      cell_array = next_gen;
      //console.log(next_gen);
      display.update(cell_array);
    },
    // Returns the current generation array of cells
    getCurrentGenCells: function() {
      return cell_array;
    },
    // Add "The" to function name to reduce confusion
    //  (even though we *could* technically use just setInterval)
    setTheInterval: function(the_interval) {
      interval = the_interval;
    },
    getInterval: function() {
      return interval;
    }
  };
};

// This is an object that will take care of all display-related features.
// Theoretically, you should be able to use any method of display without
// too much extra code. i.e. if you want to display the game using HTML tables,
// , or whatever other method you feel like. Just create a new <___>Display
// Object!
var GameDisplay = function(num_cells_x, num_cells_y, cell_width, cell_height, canvas_id, colourful) {
  var canvas = document.getElementById(canvas_id),
      ctx = canvas.getContext && canvas.getContext('2d'),
      width_pixels = num_cells_x * cell_width,
      height_pixels = num_cells_y * cell_height,
      drawGridLines = function() {
        ctx.lineWidth = 1;
        ctx.strokeStyle = "rgba(255, 0, 0, 1)";
        ctx.beginPath();
        // foreach column
        for (var i = 0; i <= num_cells_x; i++) {
          ctx.moveTo(i*cell_width, 0);
          ctx.lineTo(i*cell_width, height_pixels);
        }
        // foreach row
        for (var j = 0; j <= num_cells_y; j++) {
          ctx.moveTo(0, j*cell_height);
          ctx.lineTo(width_pixels, j*cell_height);
        }
        ctx.stroke();
      },
      updateCells = function(cell_array) {
        var length_y = cell_array.length,
            length_x,
            y, x;
        // each row
        for (y = 0; y < length_y; y++) {
          length_x = cell_array[y].length;
          // each column in rows
          for (x = 0; x < length_x; x++) {
            // Draw Cell on Canvas
            drawCell(cell_array[y][x]);
          }
        }
      },
      drawCell = function(cell) {
        // find start point (top left)
        var start_x = cell.getXPos() * cell_width,
            start_y = cell.getYPos() * cell_height;
        // draw rect from that point, to bottom right point by adding cell_height/cell_width
        if (cell.getState() == "alive") {
          //console.log("it's alive!");
          if (colourful === true) {
            if(canvas_id=="life-example1"){
            count1++;
            
			  pop1=count1;
			  
			  
			  document.getElementsByClassName("population1").innerHTML=pop1;
			  
			/*var da = ba.length;
			var ea = ca.length;
			
		
			while(da--)
			{
				ba[da].innerHTML = pop1;
			}*/
			
		  }
		
            if(canvas_id=="life-example2"){
            count2++;
            
			  pop2=count2;
			  
			  
			  document.getElementsByClassName("population2").innerHTML=pop2;
			  }
		  if(canvas_id=="life-example3"){
            count3++;
            
			  pop3=count3;
			  
			  document.getElementsByClassName("population3").innerHTML=pop3;
			
		  }
		  if(canvas_id=="life-example4"){
            count4++;
            
			  pop4=count4;
			  
			  
			  document.getElementsByClassName("population4").innerHTML=pop4;
			
		  }
            var r=Math.floor(Math.random()*256),
                g=Math.floor(Math.random()*256),
                b=Math.floor(Math.random()*256),
                a=(Math.floor(Math.random()*6)+5)/10; // rand between 0.5 and 1.0
            ctx.fillStyle = "rgba(" + r + "," + g + "," + b + "," + a + ")";
          }
          ctx.fillRect(start_x, start_y, cell_width, cell_height);
        } else {
          ctx.clearRect(start_x, start_y, cell_width, cell_height);
        }
      },
      init = function() {
        //console.log("width_pixels: " + width_pixels);
        //console.log("height_pixels: " + height_pixels);

        // Resize Canvas
        canvas.width = width_pixels;
        canvas.height = height_pixels;

        // No grid lines, for now!
        //drawGridLines();
      };
  init();
  return {
    update: function(cell_array) {
      updateCells(cell_array);
    }
  };


};

var Cell = function(x_pos, y_pos, state) {
  //console.log("Creating cell at " + x_pos + "," + y_pos + ", and cell state is: " + state);
  /*var x_pos = 0,        // X Position of Cell in Grid
      y_pos = 0,        // Y position of cell in Grid
      state = "dead",   // Cell state: dead or alive.
      asdf;*/
  
	  
  return {
    x_pos: x_pos,
    y_pos: y_pos,
    state: state,
    getXPos: function() {
      return x_pos;
    },
    getYPos: function() {
      return y_pos;
    },
    getState: function() {
      return state;
    },
    setState: function(new_state) {
      state = new_state;
    },
    clone: function() {
      return new Cell(x_pos, y_pos, state);
    }
  };
};

function game_toggle(game, force) {
  var interval = game.getInterval();
  if (force == "stop") {
    // Stop
    clearInterval(interval);
    game.setTheInterval(null);
  
  }
  
  else {
    // start
    interval = setInterval(game.step, 100);
    game.setTheInterval(interval);
  }
}

function add_listeners(game, example_num) {
  $("#" + example_num + " .stop, #" + example_num + " canvas").click(function(){
    game_toggle(game,"stop");
  });
  $("#" + example_num + " .play, #" + example_num + " canvas").click(function(){
    game_toggle(game,"play");
  });
  $("#" + example_num + " .step").click(function(){
    game_toggle(game, "stop");
    game.step();
  });
  $("#" + example_num + " .reset, #" + example_num + " canvas").click(function(){
    game_reset(game,"reset",example_num);
  });
  $("#" + example_num + " .step2").click(function(){
    game_toggle(game, "stop");
    game.step2();
  });
}
function game_reset(game, force,ex) {
  var interval = game.getInterval();
  if (force == "reset"&& ex== "example1") {
   var example1_cells = [
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
 

];
gen1=1;
pop1=7;
var aa  = document.getElementsByClassName("generation1");
			  var ab = document.getElementsByClassName("population1").innerHTML=7;
			var am = aa.length;
			var an = ab.length;
			
			while(am--)
			{
				aa[am].innerHTML = gen1;
			}
			
			
$('#generation1').val("1");
$('#generation1').html("1");
$('#population1').val("7");
$('#population1').html("7");
var game1 = new GameOfLife({
  canvas_id:    "life-example1",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example1_cells,
  colourful:    true 
});
add_listeners(game1, "example1");
 
  
  }
  else if (force == "reset"&& ex== "example2") {
  var example2_cells = [
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
];
gen2=1;
pop2=6;
var ac  = document.getElementsByClassName("generation2");
			  var ad = document.getElementsByClassName("population2").innerHTML=6;
			var o = ac.length;
			var p = ad.length;
			
			while(o--)
			{
				ac[o].innerHTML = gen2;
			}
			
var game2 = new GameOfLife({
  canvas_id:    "life-example2",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example2_cells,
  colourful:    true
});
add_listeners(game2, "example2");
  }
  else if(force == "reset"&& ex== "example3"){
  var example3_cells = [
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
];
gen3=1;
pop3=56;
var ae  = document.getElementsByClassName("generation3");
			  var af = document.getElementsByClassName("population3");
			var q = ae.length;
			var r = af.length;
			
			while(q--)
			{
				ae[q].innerHTML = gen3;
			}
			while(r--)
			{
				af[r].innerHTML = 56;
			}

var game3 = new GameOfLife({
  canvas_id:    "life-example3",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example3_cells,
  colourful:    true
});
add_listeners(game3, "example3");
  } 
  else if(force == "reset"&& ex== "example4"){
  var example4_cells = [
[0,0,0,0,0,0,0,0,0],
[0,0,1,0,0,1,0,0,0],
[0,0,0,0,0,0,1,0,0],
[0,0,1,0,0,1,0,0,0],
[0,0,0,1,1,1,1,0,0],
[0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0]
];
gen4=1;
pop4=9;
var ag  = document.getElementsByClassName("generation4");
			  var ah = document.getElementsByClassName("population4");
			var s = ag.length;
			var t = ah.length;
			
			while(s--)
			{
				ag[s].innerHTML = gen4;
			}
			while(t--)
			{
				ah[t].innerHTML = 9;
			}
var game4 = new GameOfLife({
  canvas_id:    "life-example4",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example4_cells,
  colourful:    true
});
add_listeners(game4, "example4");
  }
  }

var example1_cells = [
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
 [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
 

];

var game1 = new GameOfLife({
  canvas_id:    "life-example1",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example1_cells,
  colourful:    true 
});
add_listeners(game1, "example1");




var example2_cells = [
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
  [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
];

var game2 = new GameOfLife({
  canvas_id:    "life-example2",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example2_cells,
  colourful:    true
});
add_listeners(game2, "example2");






var example3_cells = [
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
];


var game3 = new GameOfLife({
  canvas_id:    "life-example3",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example3_cells,
  colourful:    true
});
add_listeners(game3, "example3");

var example4_cells = [
[0,0,0,0,0,0,0,0,0],
[0,0,1,0,0,1,0,0,0],
[0,0,0,0,0,0,1,0,0],
[0,0,1,0,0,1,0,0,0],
[0,0,0,1,1,1,1,0,0],
[0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0]
];

var game4 = new GameOfLife({
  canvas_id:    "life-example4",
  cell_width:   10,
  cell_height:  10,
  init_cells:   example4_cells,
  colourful:    true
});
add_listeners(game4, "example4");


