
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
  [0,0,0,0,0,0],
  [0,0,1,1,0,0],
  [0,1,0,0,1,0],
  [0,0,1,0,1,0],
  [0,0,0,1,0,0],
  [0,0,0,0,0,0]

];
$('#generation1').val("1");
$('#generation1').html("1");
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
  [0,0,0,0,0,0],
  [0,1,1,0,0,0],
  [0,1,0,0,0,0],
  [0,0,0,0,1,0],
  [0,0,0,1,1,0],
  [0,0,0,0,0,0]
];

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
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0],
[0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0],
[0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0],
[0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0],
[0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
];


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
  [0,0,0,0,0,0],
  [0,0,1,1,0,0],
  [0,1,0,0,1,0],
  [0,0,1,0,1,0],
  [0,0,0,1,0,0],
  [0,0,0,0,0,0]

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
  [0,0,0,0,0,0],
  [0,1,1,0,0,0],
  [0,1,0,0,0,0],
  [0,0,0,0,1,0],
  [0,0,0,1,1,0],
  [0,0,0,0,0,0]
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
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0],
[0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0],
[0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0],
[0,0,0,1,0,1,0,1,0,1,0,1,0,1,0,0,0],
[0,1,1,1,0,0,1,1,0,1,1,0,0,1,1,1,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
[0,0,0,0,0,1,1,0,0,0,1,1,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,1,0,0,0,0,0,1,0,0,0,0,0],
[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
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


