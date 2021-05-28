@extends('layouts.videoapp')

@section('content')


<button onclick="test12345()">execute</button>

<div id="playerDiv"></div>
<div class="side-nav side-nav-container-closed">
<div class="container" >
  <div class="row" style="height:100%">
    <div class="col-6" style="padding: 0 0;">
	<form id="yourForm">
	<div class="input-group input-group-sm mb-3">
  <input id="inputId" style="width:80%;" type="text" class="form-control" placeholder="" aria-label="" aria-describedby="" autocomplete="off">
  <div class="input-group-append">
    <button style="width:20%;" class="btn btn-outline-secondary" type="submit"></button>
  </div>
</div>
</form>
	<div id="articles">
    </div>
    </div>


    <div class="col-6" style="padding: 0 0;border:1px solid coral;border-radius: 8px;">
	<h3 style="text-align: center;">Queue</h3>
	<div id="articles2"> </div>
    </div>
  </div>
</div>
</div>
<div class="side-nav-screen-hold" style="display:none"></div>
<button class="btn btn-default toggle-sidebar">Toggle Sidebar</button>








<script>
//YOUTUBE API----------------------------------------------------
function execute(input){
const YOUTUBE_API_KEY = "AIzaSyDX1UcwMU7b5gAqdmwXvo8vHQZoQW8p3U4";
var q=input;
const url = `https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=5&q=${q}&key=${YOUTUBE_API_KEY}`;
// console.log(url);
fetch(url)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    //document.querySelector(".youtubeVideo").src = `https://www.youtube.com/embed/${data.items[0].id.videoId}`;
	resultsLoop(data);
});
}

var id;
var image;
function resultsLoop(data){
	document.getElementById("articles").innerHTML = "";
	$.each(data.items, function(i,item){
	var thumb = data.items[i].snippet.thumbnails.medium.url;
	var title = item.snippet.title;
	var desc = item.snippet.description;
	var vid = item.id.videoId;	
$('#articles').append(`
<article class="item" data-key="${vid}" style="border-radius:8px; padding:9px 12px;">
  <img src="${thumb}" style="width:100%;></img>
  <div class="detailts">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">${title}</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding:0; margin:0;">${desc}</p>
  </div>
  </article>


`);
	});
	
	$('#articles').on('click','article',function(){
		id= $(this).attr('data-key');
		console.log("my id = "+id);//write here maybe the function to create an iframe video passing the video id.
		$(this).clone().appendTo('#articles2');
	});

}

$('#articles2').on('click','article',function(){
		id= $(this).attr('data-key');
		console.log("my id = "+id);//write here maybe the function to create an iframe video passing the video id.
		test12345(id);
	});




$('#yourForm').submit(function(event){

// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('inputId').value;
console.log("enter or press"+ input);
document.getElementById('inputId').value='';
execute(input);
});

</script>



<style>

article:hover {
		border: 2px solid #ff9999;
	}


body { 
   overflow-x: hidden;
}


.nopadding
{
	padding:0;
}

.centered
{
	text-align: center !important;
}

.leftalign
{
	text-align: left !important;
}

.rightalign
{
	text-align: right !important;
}

.side-nav-screen-hold
{
	position: absolute;
	height: 100vh;
	width: 100vw;
	background-color: rgba(0,0,0,.4);
	z-index: 900;
	top: 0;
	left: 0;
	z-index: 1050;
}

.side-nav-container-closed
{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	position: absolute;
	height: 100vh;
	width: 20em;
	right: -27em;
	top: 0;
	background-color: rgb(0,0,0);
	z-index: 1100;
	overflow-y: auto;
	
}

.side-nav-container
{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	position: absolute;
	height: 100vh;
	width: 20em !important;
	right: 0;
	top: 0;
	background-color: rgb(52, 235, 131);
	z-index: 1100;
	overflow-y: auto;
	
}




.side-nav-divider
{
	width: 100%;
	height: 1px;
	background-color: white;
}


.side-nav-tab
{
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
	height: 4em;
	-webkit-transition: all 0.1s ease;
	-moz-transition: all 0.1s ease;
	-o-transition: all 0.1s ease;
	-ms-transition: all 0.1s ease;
	transition: all 0.1s ease;
}




.side-nav-tab:hover
{
	background-color: white;
	color:black !important;
}

.side-nav-tab-selected
{
	background-color: white;
	color:black !important;
}


</style>


<script>
$(".toggle-sidebar").on("click",function()
{
	$(".side-nav").removeClass("side-nav-container-closed");
	$(".side-nav").addClass("side-nav-container");
	$(".side-nav-screen-hold").fadeIn("fast");
});

$(".side-nav-screen-hold").on("click", function()
{
	$(".side-nav").removeClass("side-nav-container");
	$(".side-nav").addClass("side-nav-container-closed");
	$(".side-nav-screen-hold").fadeOut("fast");
});
</script>



<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var player;
      function test12345(id) {
		document.getElementById("playerDiv").innerHTML = "";
		var a=document.getElementById("playerDiv");
		var b=document.createElement("div");
		b.id= 'player';
		a.append(b);
		
        player = new YT.Player('player', {
          height: '390',
          width: '640',
          videoId: id,
          playerVars: {
            'playsinline': 1
          },
          events: {
			'onStateChange': onPlayerStateChange
          }
        });
      }

	  function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING ) {
          console.log("playing");
        }
      }

</script>


















<!-- <div class="side-nav side-nav-container-closed">

</div>
<div class="side-nav-screen-hold" style="display:none"></div>
<button class="btn btn-default toggle-sidebar">Toggle Sidebar</button>




tttttttttttttttttttttttttttttttttttttttttt

<style>






.nopadding
{
	padding:0;
}

.centered
{
	text-align: center !important;
}

.leftalign
{
	text-align: left !important;
}

.rightalign
{
	text-align: right !important;
}

.side-nav-screen-hold
{
	position: absolute;
	height: 100vh;
	width: 100vw;
	background-color: rgba(0,0,0,.4);
	z-index: 900;
	top: 0;
	left: 0;
	z-index: 1050;
}

.side-nav-container-closed
{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	position: absolute;
	height: 100vh;
	width: 20em;
	right: -27em;
	top: 0;
	background-color: rgb(0,0,0);
	z-index: 1100;
	overflow-y: auto;
	padding-bottom: 3em;
}

.side-nav-container
{
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	transition: all 0.5s ease;
	position: absolute;
	height: 100vh;
	width: 20em !important;
	right: 0;
	top: 0;
	background-color: rgb(52, 235, 131);
	z-index: 1100;
	overflow-y: auto;
	padding-bottom: 3em;
}




.side-nav-divider
{
	width: 100%;
	height: 1px;
	background-color: white;
}


.side-nav-tab
{
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-ms-user-select: none;
	user-select: none;
	height: 4em;
	-webkit-transition: all 0.1s ease;
	-moz-transition: all 0.1s ease;
	-o-transition: all 0.1s ease;
	-ms-transition: all 0.1s ease;
	transition: all 0.1s ease;
}




.side-nav-tab:hover
{
	background-color: white;
	color:black !important;
}

.side-nav-tab-selected
{
	background-color: white;
	color:black !important;
}


</style>

<script>
$(".toggle-sidebar").on("click",function()
{
	$(".side-nav").removeClass("side-nav-container-closed");
	$(".side-nav").addClass("side-nav-container");
	$(".side-nav-screen-hold").fadeIn("fast");
});

$(".side-nav-screen-hold").on("click", function()
{
	$(".side-nav").removeClass("side-nav-container");
	$(".side-nav").addClass("side-nav-container-closed");
	$(".side-nav-screen-hold").fadeOut("fast");
});
</script> -->
























<!-- <div class="container-fluid" style="height:62px; background-color: rgba(0, 140, 255, 1);">
<div class="row">
<div class="col-4 ">
<div id="control-panel" style="width:10%; height:6.5%;">
<input type="hidden" id="trail" name="trail" checked />
<button id="clear" class="btn btn-outline-danger" style="display: block; margin: 0px 0px; width:100%; height:100%;"></button>
</div>
<canvas id="c" ></canvas>
</div>
</div>
</div>
<script>

window.requestAnimFrame=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||window.oRequestAnimationFrame||window.msRequestAnimationFrame||function(a){window.setTimeout(a,1E3/60)}}();

document.onselectstart = function() {
  return false;
};
var c = document.getElementById('c');
var ctx = c.getContext('2d');
var dpr = window.devicePixelRatio;
var cw = window.innerWidth;
var ch = window.innerHeight;
c.width = cw * dpr;
c.height = ch * dpr;
ctx.scale(dpr, dpr);
var rand = function(rMi, rMa){return ~~((Math.random()*(rMa-rMi+1))+rMi);}
ctx.lineCap = 'round';
var orbs = [];
var orbCount = 30;
var radius;

var trailCB = document.getElementById('trail');
var trail = trailCB.checked;
var clearer = document.getElementById('clear');

function createOrb(mx,my){
  var dx = (cw/2) - mx;
	var dy = (ch/2) - my;
	var dist = Math.sqrt(dx * dx + dy * dy);
	var angle = Math.atan2(dy, dx);
	orbs.push({
		x: mx,
		y: my,
		lastX: mx,
		lastY: my,
		hue: 0,
		colorAngle: 0,
		angle: angle + Math.PI/2,
		//size: .5+dist/250,
		size: rand(1,3)/2,
		centerX: cw/2,
		centerY: ch/2,		
		radius: dist,
		speed: (rand(5,10)/1000)*(dist/750)+.015,
		alpha: 1 - Math.abs(dist)/cw,
		draw: function() {			
			ctx.strokeStyle = 'hsla('+this.colorAngle+',100%,50%,1)';	
			ctx.lineWidth = this.size;			
			ctx.beginPath();
			ctx.moveTo(this.lastX, this.lastY);
			ctx.lineTo(this.x, this.y);
			ctx.stroke();
		},	
		update: function(){
			var mx = this.x;
			var my = this.y;	
			this.lastX = this.x;
			this.lastY = this.y;
			var x1 = cw/2;
			var y1 = ch/2;
			var x2 = mx;
			var y2 = my;		
			var rise = y1-y2;
			var run = x1-x2;
			var slope = -(rise/run);
			var radian = Math.atan(slope);
			var angleH = Math.floor(radian*(180/Math.PI));		
			if(x2 < x1 && y2 < y1){angleH += 180;}		
			if(x2 < x1 && y2 > y1){angleH += 180;}		
			if(x2 > x1 && y2 > y1){angleH += 360;}		
			if(y2 < y1 && slope =='-Infinity'){angleH = 90;}		
			if(y2 > y1 && slope =='Infinity'){angleH = 270;}		
			if(x2 < x1 && slope =='0'){angleH = 180;}
			if(isNaN(angleH)){angleH = 0;}
			
			this.colorAngle = angleH;
			this.x = this.centerX + Math.sin(this.angle*-1) * this.radius;
			this.y = this.centerY + Math.cos(this.angle*-1) * this.radius;
			this.angle += this.speed;
		
		}
	});
}

function orbGo(e){
	var mx = e.pageX - c.offsetLeft;
	var my = e.pageY - c.offsetTop;		
	createOrb(mx,my);
}

function turnOnMove(){
	c.addEventListener('mousemove', orbGo, false);	
}

function turnOffMove(){
	c.removeEventListener('mousemove', orbGo, false);	
}

function toggleTrails(){
	trail = trailCB.checked;
}

function clear(){
 orbs = []; 
 var count = 100;
while(count--){
		createOrb(cw/2, ch/2+(count*2));
}
}

c.addEventListener('mousedown', orbGo, false);
c.addEventListener('mousedown', turnOnMove, false);
c.addEventListener('mouseup', turnOffMove, false);
trailCB.addEventListener('change', toggleTrails, false);
clearer.addEventListener('click', clear, false);

var count = 100;
while(count--){
		createOrb(cw/2, ch/2+(count*2));
}

var loop = function(){
  window.requestAnimFrame(loop);
	if(trail){


		ctx.fillStyle = 'rgba(0,0,0,.1)';
		ctx.fillRect(0,0,cw,ch);
	} else {
		ctx.clearRect(0,0,cw,ch);
	}
	var i = orbs.length;
	while(i--){	
		var orb = orbs[i];	
		var updateCount = 3;
		while(updateCount--){
		orb.update();		
		orb.draw(ctx);
		}
		
	}

}
            
loop();

</script>

<style>


canvas {
  
  width: 100%;
  height: 7%;
}

#control-panel {
  background: rgba(0,0,0,.75);
  border: 1px solid #333;
 
  position: absolute;
  
  z-index: 2;
}

p {
	font-size: 12px;
  margin: 0 0 5px;
}

a {
  border-bottom: 1px dotted #444;
  color: #fff;
  font-size: 12px;
  text-decoration: none;
}
</style> -->

@endsection