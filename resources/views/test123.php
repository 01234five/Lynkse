@extends('layouts.videoapp')

@section('content')
<div id="content">

<div  id="vimeoVideo"></div>
</div>
<button type="submit"onclick="vimeoPusherPlay()">Button</button>
<button type="submit"onclick="vimeoPusherPause()">Button</button>
<button type="submit"onclick="vimeoVolume()">Button</button>
<button type="submit"onclick="insertPlayer()">Button</button>
<input id="myRangeVimeo" type="range" min="0" max="0" value="0" class="range blue"/>





<script src="https://player.vimeo.com/api/player.js"></script>
<script>
var playerVimeo; 
function insertPlayer(){
  var options = {
        id: 59777392,
        width: 640,
        loop: false,
        speed: false,
        autoplay: false,
        controls: false,
    };

  playerVimeo= new Vimeo.Player('vimeoVideo', options);

  
    
    playerVimeo.setVolume(0);

    playerVimeo.on('play', function() {
        trackVimeo=true;
        console.log('played the video!');
    });

    playerVimeo.on('pause', function() {
      trackVimeo=false;
        console.log('PAUSED the video!');
    });

    playerVimeo.on('loaded', function() {
        console.log('loaded video!');
        videoMaxTime();
        VimeotrackTime();
    });

    playerVimeo.ready().then(function() {
    // the player is ready
    videoMaxTime();
});


    playerVimeo.on('seeking', function(data) {
      pauseVideoVimeo();
    //console.log("SEEKING");
   
});

playerVimeo.on('seeked', function(data) {
  pauseVideoVimeo();
    //console.log("SEEKED TO: "+data.seconds);
    
});


playerVimeo.on('ended', function(data) {
    sendTimeBoolVimeo =false;
    console.log("ENDED");
    
});



    

}

Echo.join('videoactionroom.' + <?php echo $room->id; ?>)
                    .joining((user) => {
                       console.log(user);
                       
                       
                    })
                    .listen('VideoAction', (e) => {
                        console.log(e);
                        if(e.action.message==="PLAYVIMEO"){
                          sendTimeBoolVimeo =true
                         
                          playVideoVimeo();
                       }

                       if(e.action.message==="PAUSEVIMEO"){
                        sendTimeBoolVimeo =false
                        pauseVideoVimeo();
                        
                       }

                       if(e.action.message==="SEEKVIMEO"){
                        sendTimeBoolVimeo =false
                        seekVideoVimeo(e.action.vimeoSeekValue);
                        pauseVideoVimeo();
                        updateHandlerVimeo(e.action.vimeoSeekValue)
                        
                       }


                       if(e.action.message==="TIMEVIMEO"){
                        //RECEIVES TIME EVERY 5 SECONDS
                        
                        syncTimeVimeo(e.action.currentVideoTime)
                      }

                      if(e.action.message==="SEEKSYNCVIMEO"){
                        sendTimeBoolVimeo =false
                        seekVideoVimeo(e.action.currentVideoTime);
                        playVideoVimeo();
                       }
                        
                        
                      });




var trackVimeo=false;

var myVarVimeo;


var sendTimeBoolVimeo=false;
var vimeoSyncInterval=setInterval(function(){ startSyncingTimeVimeo();}, 5000);
function startSyncingTimeVimeo(){
  if(sendTimeBoolVimeo==true){
    sendTimeVimeo()
  }
  else
{

}
 
}


function syncTimeVimeo(theirvideoTime){
    //console.log(theirvideoTime);
    playerVimeo.getCurrentTime().then(function(seconds) {
      console.log(theirvideoTime,seconds)
      if(seconds - 5 > theirvideoTime){//im up
      console.log("up 7:"+ theirvideoTime,seconds);
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSyncVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'SEEKSYNCVIMEO',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: theirvideoTime,
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
    }
}).catch(function(error) {
    // an error occurred
});



    

  
  }


function sendTimeVimeo(){
  playerVimeo.getCurrentTime().then(function(seconds) {
    console.log("SYNC EVERY 5 SEC IF NECESARRY") 
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionSeekVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'TIMEVIMEO',
                        room:<?php echo $room->id; ?>,
                        currentVideoTime: seconds,
                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                });
}).catch(function(error) {
    // an error occurred
});


    
                     
  }



function VimeotrackTime(){
  myVarVimeo = setInterval(function(){ vimeoCurrentTime() }, 2000);

}
function VimeostopTrack() {
  clearInterval(myVarVimeo);
}


  
    

    



function getTime(){
      var test;
      playerVimeo.getCurrentTime().then(function(seconds) {
    // seconds = the current playback position
    //console.log(seconds);
}).catch(function(error) {
    // an error occurred
});


    }

    function getDuration(){
      playerVimeo.getDuration().then(function(duration) {
    // duration = the duration of the video in seconds
}).catch(function(error) {
    // an error occurred
});
    }


    function vimeoPusherPlay(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PLAYVIMEO',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
    }



    function vimeoPusherPause(){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/videoactionVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'PAUSEVIMEO',
                        room:<?php echo $room->id; ?>,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
    }


    function vimeoPusherSeek(sv){
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/seekVimeo',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:'SEEKVIMEO',
                        room:<?php echo $room->id; ?>,
                        vimeoSeekValue:sv,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
    }

    function seekVideoVimeo(seekValue){
      playerVimeo.setCurrentTime(seekValue).then(function(seconds) {
    // seconds = the actual time that the player seeked to
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the time was less than 0 or greater than the video’s duration
            break;

        default:
            // some other error occurred
            break;
    }
});
    }

    function playVideoVimeo(){
      //console.log(inputRange.max);
      playerVimeo.play().then(function() {
    // the video was played
    sendTimeBoolVimeo =true;
}).catch(function(error) {
    switch (error.name) {
        case 'PasswordError':
            // the video is password-protected and the viewer needs to enter the
            // password first
            break;

        case 'PrivacyError':
            // the video is private
            break;

        default:
            // some other error occurred
            break;
    }
});
    }


    function pauseVideoVimeo(){

      playerVimeo.pause().then(function() {
    // the video was paused
    sendTimeBoolVimeo =false;
}).catch(function(error) {
    switch (error.name) {
        case 'PasswordError':
            // the video is password-protected and the viewer needs to enter the
            // password first
            break;

        case 'PrivacyError':
            // the video is private
            break;

        default:
            // some other error occurred
            break;
    }
});
    }
    

var vimeoVolumevar=0;
function vimeoVolume(){
  if(vimeoVolumevar==0){
  playerVimeo.setVolume(1).then(function(volume) {
    vimeoVolumevar=1;
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the volume was less than 0 or greater than 1
            break;

        default:
            // some other error occurred
            break;
    }
});
  }else{
    playerVimeo.setVolume(0).then(function(volume) {
    vimeoVolumevar=0;
}).catch(function(error) {
    switch (error.name) {
        case 'RangeError':
            // the volume was less than 0 or greater than 1
            break;

        default:
            // some other error occurred
            break;
    }
});
  }
}

</script>








<script>
var inputRangeVimeo = document.getElementsByClassName('range')[0],
    maxValueVimeo = 100, // the higher the smoother when dragging
    speedVimeo = 5,
    currValueVimeo, rafIDVimeo;

// set min/max value
inputRangeVimeo.min = 0;
inputRangeVimeo.max = maxValueVimeo;

function videoMaxTime(){
      playerVimeo.getDuration().then(function(duration) {
   
    $('#myRangeVimeo').attr('max',duration); //setter
    
}).catch(function(error) {
    // an error occurred
});
}

// listen for unlock
function unlockStartHandler() {
  //stopTrack();
  trackVimeo=false;
  vimeoPusherPause();
    // set to desired value
    currValueVimeo = +this.value;
    inputRangeVimeo.Value=currValueVimeo;




}
function updateHandlerVimeo(cvVimeo){
  currValueVimeo = +cvVimeo;
    inputRangeVimeo.Value=currValueVimeo;
    window.requestAnimationFrame(animateHandlerVimeo);
}
function unlockEndHandler() {
   //stopTrack();

    // store current value
    currValueVimeo = +this.value;
    inputRangeVimeo.Value=currValueVimeo;
    //seekVideoVimeo(currValue);
    vimeoPusherSeek(currValueVimeo)

  
    trackVimeo=false;



  
  //SEND HERE MESSAGE SEEEEKK
}

function vimeoCurrentTime(){
  if(trackVimeo==true){


playerVimeo.getCurrentTime().then(function(seconds) {
    // seconds = the current playback position
    //console.log(seconds);
    currValueVimeo= seconds;
    //console.log(currValue);
}).catch(function(error) {
    // an error occurred
});

inputRangeVimeo.Value=currValueVimeo;
//console.log("currValue " + currValue);
//console.log("inputRANGE " + inputRange.Value);
if(currValueVimeo > -1) {
      window.requestAnimationFrame(animateHandlerVimeo);   
    }
  }
}



// handle range animation
function animateHandlerVimeo() {

    //// calculate gradient transition
   // var transX = currValue - maxValue;
    
    // update input range
    inputRangeVimeo.value = currValueVimeo;

    //Change slide thumb color on mouse up
    if (currValueVimeo < 20) {
        inputRangeVimeo.classList.remove('ltpurple');
    }
    if (currValueVimeo < 40) {
        inputRangeVimeo.classList.remove('purple');
    }
    if (currValueVimeo < 60) {
        inputRangeVimeo.classList.remove('pink');
    }
    
    // determine if we need to continue
    //if(currValue > -1) {
    //  window.requestAnimationFrame(animateHandler);   
   // }
    
    // decrement value
   // currValue = currValue - speed;
}

// handle successful unlock
function successHandler() {
  alert('Unlocked');
};

// bind events
inputRangeVimeo.addEventListener('mousedown', unlockStartHandler, false);
inputRangeVimeo.addEventListener('mousestart', unlockStartHandler, false);
inputRangeVimeo.addEventListener('mouseup', unlockEndHandler, false);
inputRangeVimeo.addEventListener('touchend', unlockEndHandler, false);

// move gradient
inputRangeVimeo.addEventListener('input', function() {
    //Change slide thumb color on way up
    if (this.value > 20) {
        inputRangeVimeo.classList.add('ltpurple');
    }
    if (this.value > 40) {
        inputRangeVimeo.classList.add('purple');
    }
    if (this.value > 60) {
        inputRangeVimeo.classList.add('pink');
    }

    //Change slide thumb color on way down
    if (this.value < 20) {
        inputRangeVimeo.classList.remove('ltpurple');
    }
    if (this.value < 40) {
        inputRangeVimeo.classList.remove('purple');
    }
    if (this.value < 60) {
        inputRangeVimeo.classList.remove('pink');
    }
});
</script>

<style>


#myRangeVimeo.range {
  -webkit-appearance: none;
  -moz-appearance: none;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 200px;
  margin-top: 0px;
  transform: translate(-50%, -50%);
}

#myRangeVimeo[type=range]::-webkit-slider-runnable-track {
  -webkit-appearance: none;
  background: rgba(59,173,227,1);
  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
  height: 2px;
}

#myRangeVimeo[type=range]:focus {
  outline: none;
}

#myRangeVimeo[type=range]::-moz-range-track {
  -moz-appearance: none;
  background: rgba(59,173,227,1);
  background: -moz-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(59,173,227,1)), color-stop(25%, rgba(87,111,230,1)), color-stop(51%, rgba(152,68,183,1)), color-stop(100%, rgba(255,53,127,1)));
  background: -webkit-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -o-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: -ms-linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  background: linear-gradient(45deg, rgba(59,173,227,1) 0%, rgba(87,111,230,1) 25%, rgba(152,68,183,1) 51%, rgba(255,53,127,1) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3bade3 ', endColorstr='#ff357f ', GradientType=1 );
  height: 2px;
}

#myRangeVimeo[type=range]::-webkit-slider-thumb {
  -webkit-appearance: none;
  border: 2px solid;
  border-radius: 50%;
  height: 25px;
  width: 25px;
  max-width: 80px;
  position: relative;
  bottom: 11px;
  background-color: #1d1c25;
  cursor: -webkit-grab;

  -webkit-transition: border 1000ms ease;
  transition: border 1000ms ease;
}

#myRangeVimeo[type=range]::-moz-range-thumb {
  -moz-appearance: none;
  border: 2px solid;
  border-radius: 50%;
  height: 25px;
  width: 25px;
  max-width: 80px;
  position: relative;
  bottom: 11px;
  background-color: #1d1c25;
  cursor: -moz-grab;
  -moz-transition: border 1000ms ease;
  transition: border 1000ms ease;
}



#myRangeVimeo.range.blue::-webkit-slider-thumb {
   border-color: rgb(59,173,227);
}

#myRangeVimeo.range.ltpurple::-webkit-slider-thumb {
   border-color: rgb(87,111,230);
}

#myRangeVimeo.range.purple::-webkit-slider-thumb {
   border-color: rgb(152,68,183);
}

#myRangeVimeo.range.pink::-webkit-slider-thumb {
   border-color: rgb(255,53,127);
}

#myRangeVimeo.range.blue::-moz-range-thumb {
   border-color: rgb(59,173,227);
}

#myRangeVimeo.range.ltpurple::-moz-range-thumb {
   border-color: rgb(87,111,230);
}

#myRangeVimeo.range.purple::-moz-range-thumb {
   border-color: rgb(152,68,183);
}

#myRangeVimeo.range.pink::-moz-range-thumb {
   border-color: rgb(255,53,127);
}

#myRangeVimeo[type=range]::-webkit-slider-thumb:active {
  cursor: -webkit-grabbing;
}

#myRangeVimeo[type=range]::-moz-range-thumb:active {
  cursor: -moz-grabbing;
}
</style>







@endsection