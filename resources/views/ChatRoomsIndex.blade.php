@extends('layouts.videoapp')

@section('content')









  
<div class="container"> <!-- this is mandatory when using row -->
  <div class="row"style="height:70%;">

  <div class="col-4 " style="height:100%; background-color:#141313;">
 


  <div class="container testimonial-group" style="height:100%;">
  <div id="roomList" class="row text-center" style="height:100%;">
    

 
  </div>
</div>
      


    </div>
 

   
    <div  id="category" class="col-8">
      <div class="row">
      <div class="col-2" style="padding: 0 0;" >

<article class="item" category-key="anime" style="border-radius:8px; padding:1px 5px;" >

  <img  class="center"src="/category/anime.jpg" alt="image" style="width: 80px;
  height: 150px; display: block;
    margin: 0 auto;
  "></img>
  <div id="detailts" class="justify-content-center" style="display: flex;">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">Anime</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding-left: 16; margin:3; " >Rooms #</p>
 
  </div>
  </article>

</div>




<div class="col-2" style="padding: 0 0;" >
<div id="category" >
<article class="item" category-key="video games" style="border-radius:8px; padding:1px 5px;" >

  <img  class="center"src="/category/anime.jpg" alt="image" style="width: 80px;
  height: 150px; display: block;
    margin: 0 auto;
  "></img>
  <div id="detailts" class="justify-content-center" style="display: flex;">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">Video Games</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding-left: 16; margin:3; " >Rooms #</p>
 
  </div>
  </article>
</div>
</div>


<div class="col-2" style="padding: 0 0;" >
<div id="category" >
<article class="item" category-key="comedy" style="border-radius:8px; padding:1px 5px;" >

  <img  class="center"src="/category/anime.jpg" alt="image" style="width: 80px;
  height: 150px; display: block;
    margin: 0 auto;
  "></img>
  <div id="detailts" class="justify-content-center" style="display: flex;">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">Comedy</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding-left: 16; margin:3; " >Rooms #</p>
 
  </div>
  </article>
</div>
</div>

<div class="col-2" style="padding: 0 0;" >
<div id="category" >
<article class="item" category-key="music" style="border-radius:8px; padding:1px 5px;" >

  <img  class="center"src="/category/anime.jpg" alt="image" style="width: 80px;
  height: 150px; display: block;
    margin: 0 auto;
  "></img>
  <div id="detailts" class="justify-content-center" style="display: flex;">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">Music</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding-left: 16; margin:3; " >Rooms #</p>
 
  </div>
  </article>
</div>
</div>




      </div>

      <div class="row">
      <div class="col-2" style="padding: 0 0;" >

<article class="item" category-key="other" style="border-radius:8px; padding:1px 5px;" >

  <img  class="center"src="/category/anime.jpg" alt="image" style="width: 80px;
  height: 150px; display: block;
    margin: 0 auto;
  "></img>
  <div id="detailts" class="justify-content-center" style="display: flex;">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">Other</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding-left: 16; margin:3; " >Rooms #</p>
 
  </div>
  </article>

</div>


<div class="col-2" style="padding: 0 0;" >

<article class="item" category-key="All" style="border-radius:8px; padding:1px 5px;" >

  <img  class="center"src="/category/anime.jpg" alt="image" style="width: 80px;
  height: 150px; display: block;
    margin: 0 auto;
  "></img>
  <div id="detailts" class="justify-content-center" style="display: flex;">
  <h5 style="font-size: 80%; padding:0;margin:0;font-weight:600;">All</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding-left: 16; margin:3; " >Rooms #</p>
 
  </div>
  </article>

</div>


      </div>


      <div class="row">
        <div class="col-auto">
          <div id="h">Bar2</div>
        </div>
      </div>


    </div>
  </div>
  
  <row>
    <button type="button" onclick="createForm();" class="nav-toggle">
      Create
    </button>
  
  
  
  <button onclick="insertBanner2();">Button TEST</button>
    </row>
</div>



    
<a class="nav-toggle" id="overlay"></a>


<div id="ocn">
    <div id="ocn-inner">


    <div id="createRoomForm">

    <p>test</p>


    </div>
 

   
   
    
    </div>
  </div>

<script>

// particle.min.js hosted on GitHub
// Scroll down for initialisation code

!function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?2e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation
var particleCanvas=[];
function insertBanner(id,banner,effect){
  
  
  
  if(effect=="particles"){
var canvasDiv = document.getElementById('particle-canvas'+id);
var options = {
  particleColor: '#0083FF',
  background: banner,
  interactive: false,
  speed: 'slow',
  density: 'high'
};
particleCanvas.push(new ParticleNetwork(canvasDiv, options));
}
}

function insertBanner2(){
  banner="/userFlag/"+user.banner;
  id=1;
var canvasDiv = document.getElementById('particle-canvas'+id);
var options = {
  particleColor: '#0083FF',
  background: banner,
  interactive: false,
  speed: 'slow',
  density: 'high'
};
var particleCanvas = new ParticleNetwork(canvasDiv, options);
}
</script>
<style>
  #roomList{
   
     overflow:hidden;
     
}
#roomList:hover { 
     overflow-x:scroll; 
    
}
  /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<style>


.particlesdiv{
  overflow:hidden;
}
#particle-canvas {
  width: 100%;
  height: 100%;
}

</style>
<style>
/* The heart of the matter */
.testimonial-group > .row {
  display: block;
  overflow-x: auto;
  overflow-y: hidden;
  white-space: nowrap;
}
.testimonial-group > .row > .col-4 {
  display: inline-block;
}

article:hover {
		border: 2px solid #ff9999;
	}
</style>



<script>
function test(){
  console.log(user);
}
function deleteRoom(){
  console.log("yo!")
  
  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/roomInfo/DeleteRoom',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        id: 17,
                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 


}

room=<?php echo $rooms; ?>;
user=<?php echo auth()->user(); ?>;

$(document).ready(function(){
    addRooms(room);
});
$('#category').on('click','article',function(){
		category= $(this).attr('category-key');
		//console.log("my id = "+category);//write here maybe the function to create an iframe video passing the video id.
        if(category==="All"){  
          particleCanvas.length = 0;//empty array
            getAllRooms();
        }else{
          particleCanvas.length = 0;//empty array
            getRooms(category);
        }
        
       
});


$('#roomList').on('click','article',function(){
  id= $(this).attr('id-key');
  videoT=$(this).attr('videoType-key');
  console.log(videoT);
  var result = $.grep(room, function(e){ return e.id == id; });
  console.log(result);
  axios.get('/roomInfo/getCount/'+id)
    .then(function (response) {
        // handle success
        
       //console.log(response.data);
       
       if(response.data>1){
        console.log("room is full")
    }else{
    //console.log("my result"+result);
                //location.replace(route('chat-rooms.show', room1));
                if(videoT=="youtube"){
                location.href=route('chat-rooms.show', result);
                }else{
                  location.href=route('chat-roomsB.show', result);
                }
              }
            })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
        
});

function createForm(){
    console.log("test");
    document.getElementById("createRoomForm").innerHTML = "";
    $('#createRoomForm').append(` 

    <form>
    <div class="form-group">
    <label for="categories">Select Category</label>
    <select multiple class="form-control" id="categories">
      <option>anime</option>
      <option>video games</option>
      <option>comedy</option>
      <option>music</option>
      <option>other</option>
    </select>
    <button type="button" onclick="createRoom();">Button</button>
  </div>
</form>
    
 
    
    `);
}



function addRooms(data){
    document.getElementById("roomList").innerHTML = "";
    
	$.each(data, function(i){
        console.log(data[i]);
        var thumb=data[i].userThumb;
        var banner="/userFlag/"+data[i].userBanner;
        var effect=data[i].userBanner_effect;
        var id=data[i].id;
        var name=data[i].name;
        var videoType=data[i].videoType;
        //var category=data[i].category;
       


        $('#roomList').append(`

<article class="col-4"  id-key="${id}" name-key="${name}" videoType-key="${videoType}" style="height:98%;">


    
<div class="row">
    <div class="col-12" >
    <img src="/users/${thumb}" class="img-thumbnail" style="border-color: #141313;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div id="h" class="text-center" style="color: white;">${name}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h">${data[i].category}</div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div class="particlesdiv" id="particle-canvas${id}" style="height:300px"></div>
  </div>
  
</article>

        `);

        insertBanner(id,banner,effect);

    });
}


function getRooms(category){
    axios.get('/roomInfo/'+category)
    .then(function (response) {
        // handle success
       // console.log(response.data);
        addRooms(response.data);
        room=response.data;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}

function getAllRooms(){
    axios.get('/roomInfo/getAll/0')
    .then(function (response) {
        // handle success
       // console.log(response.data);
        addRooms(response.data);
        room=response.data;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}


function projectUrl() {
                
                room1=room[1];
                //location.replace(route('chat-rooms.show', room1));
                location.href=route('chat-rooms.show', room1);
}

function rederictRoomCreated(room){
  location.href=route('chat-rooms.show', room);
}


function createRoom(){
var e = document.getElementById("categories");
var category = e.value;
//console.log(user.name);

    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/roomInfo/Create',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        name:user.name,
                        
                        category:e.value,
                        videoType:"youtube",
                        userThumbSend:user.image,
                        userBannerSend:user.banner,
                        userBannerEffectSend:user.banner_effect,
                        active:0,
                        

                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                      console.log(data);
                        $(".writeinfo").append(data.msg); 
                        rederictRoomCreated(data);
                    }
                }); 


}
                
                
            
</script>







<style>

body.nav-open {
  overflow: hidden;
}

#ocn {
  background: #ccc;
  bottom: 0;
  overflow-y: scroll;
  position: fixed;
  right: -200px;
  top: 0;
  width: 200px;
  -webkit-transition: all 300ms;
  transition: all 300ms;
  z-index: 9990;
}

.nav-open #ocn {
  -webkit-transform: translateX(-200px);
  transform: translateX(-200px);
}

#overlay {
  background: rgba(0, 0, 0, 0.8);
  bottom: 0;
  cursor: pointer;
  display: block;
  left: 0;
  opacity: 0;
  position: fixed;
  right: 0;
  top: 0;
  visibility: hidden;
  -webkit-transition: all 300ms;
  transition: all 300ms;
}

.nav-open #overlay {
  opacity: 1;
  visibility: visible;
}


</style>



<script>

(function($) {

var navToggle = function() {
  $('body').on('click', '.nav-toggle', function(ev) {
    ev.preventDefault();
    $('body').toggleClass('nav-open');
  });
};

$(document).ready(function() {
  navToggle();
});
})(jQuery);

</script>


@endsection
