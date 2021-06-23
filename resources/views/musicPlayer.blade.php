@extends('layouts.communityapptest')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>



<div id="siteWrapper">
<div class="clearfix"></div>
<div class="container-fullwidth sec1" >
<div class="container-fullwidth mr-2 ml-2" style="width:100%;"> <!-- this is mandatory when using row -->
  <div class="row align-items-center" style="justify-content: center;">
<div id="myChat" class="col-lg-2 col-md-2 col-xs-2 p-1" style="min-height:352px;height: calc(100vh - 154px); overflow-x:hidden;">
<input type="text" id="searchListInput" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="border-radius:0px 0px 0px 0px; font-size: 1rem;">

<div id="friends"></div>
</div>



<!-- ======= sec1 ========== -->

<div class="col-lg-9 col-md-9 col-xs-12 p-1 my-auto" style=" overflow-y:hidden;">
<div id="boxleftrightContainter" class="container " style="padding-right: 15px;" >
<div id="view">












<div class="row row-flex" style="overflow-y:auto;">
<div class="col-lg-9 col-md-9 col-xs-12" >

<div class="box">
<div class="box-left" style="height:100%;overflow-x:auto; padding:0;">








<div id="audio" class="player" style="overflow:hidden;position:relative;margin:auto;width:400px;height:400px;top:0%;left:0%;">

	    <canvas id="canvasPlayer" style="height:400px;width:400px;"></canvas>

		<div class="playarea" style="left:51%">
			<div class="prevSong"></div>
			<div class="play"></div>
			<div class="pause"></div>
			<div class="nextSong"></div>
		</div>
        <div class="song" style="color:ffc2cd">
			<div id="songArtist" class="artist" style="font-weight: bold;">Artist</div>
			<div id="songName" class="name">Song Name</div>
		</div>
		<div class="soundControl" style="top:104px;"></div>
		<div class="time" style="bottom:100px; color:e36d83;">00:00</div>
        <div class="wrapBar" style="bottom:40px;left:100px;position:relative;">
  <input type="range" min="0" max="100" value="50" class="range" />
</div>
	</div>




  










</div>
</div>
</div>


<div class="col-lg-3 col-md-3 col-xs-12">
<div class="box">
<div class="box-right">

<div class="row">
    <div class="col-md-12">

    </div>
  </div>
 
 <div class="row">
    <div class="col-md-12"> 
    <a onclick="getAllSongs()" class="btn btn-default toggle-sidebar2"><i id="createRoomButton" class="fa fa-star" style="display: inline-block;"></i> Browse</a>
    </div>
    </div>



    


  
</div>
</div>

</div>

</div>



















</div>
</div>







</div>
</div>

<div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center">
        <div class="col-md-6 d-flex justify-content-center">
    <a href="{{ url('privacyPolicy') }}" style="text-align: center;" target="_blank">Privacy Policy</a>
    </div>
    <div class="col-md-6 d-flex justify-content-center">
    <a href="#" onclick="toggleFullScreen();">FullScreen</a>
    </div>
</div>
</div>

</div>

</div>



<!-- ====banner========== -->












  
 
  

<!--

<b-container fluid class="" style="height: calc(100vh - 104px);">
<b-row class="h-100">
<b-col cols="2" class="p-1">


<contact-list-component></contact-list-component>
</b-col>

</b-row>
</b-container>

-->















<audio id="player" src="" autoplay="" controls="" style="display:none"></audio>





<div id="ocn2">
    <div id="ocn2-inner" style="background-color: #181E26;" >
    <div class="card h-100" style="background-color: #181E26;">




  <div class="card-header" style=" background-color: #1b2838;border-bottom: 2px solid #313F50; color:#7c7c7c; font-weight: bold; text-align: center;">
    Lyncse Library
  </div>
  <div class="card-body" style="padding:0;">





  <div class="container">
    <ul id="songList">
  <li url-key="/music/blah" class="row songListItem" style=" border-bottom: 1px solid #313F50; padding-top:5px;padding-bottom:5px;">
    <div class="col-2" style="padding-right:0;padding-left:0; bottom:1px;">
    <p id="minutes" style="margin:0; font-size: 20px;color:#7c7c7c;text-align: center;">05</p>
    <p id="seconds" style="margin:0; font-size: 20px;color:#7c7c7c;text-align: center;">10</p>
     
    </div>
    <div class="col-9" style="padding-left:0;">
    <p  style="margin:0;color:#7c7c7c">Northern Lights</p>
    <p  style="margin:0;color:#505050;font-size:12;">Metrik</p>
    </div>

</li>
 

 
  <li url-key="/music/blah" class="row songListItem" style="border-bottom: 1px solid #313F50; padding-top:5px;padding-bottom:5px;">
    <div class="col-2" style="padding-right:0;padding-left:0; bottom:1px;">
    <p style="margin:0; font-size: 20px;color:#7c7c7c;text-align: center;">05</p>
    <p style="margin:0; font-size: 20px;color:#7c7c7c;text-align: center;">10</p>
     
    </div>
    <div class="col-9" style="padding-left:0;padding-right:0;">
    <p style="margin:0;color:#7c7c7c">Northern Lights</p>
    <p style="margin:0;color:#505050;font-size:12;">Metrik</p>
    </div>
    


</li>
</ul>


</div>




  </div>


  <div class="card-footer text-muted" style="border-top: 2px solid #414141;">
    <div class="row">
        <div class="col-4">
  <p style="margin:0;color:#7c7c7c;font-weight: bold;">Playing:</p>
  </div>


  <div class="col-8">
  
  <div id="marqueeAppend">
  <div class="marquee"  data-direction= 'left'
  data-pauseOnHover= 'true'
  data-gap= '90'
  data-duplicated='true'
  ><p id="marqueeTextId" style="margin:0;color:#7c7c7c">Song - Artist</p></div>
  </div>
  </div>


  </div>
 

</div>







        </div>
    </div>
  </div>
  <a class="nav-toggle2" id="overlay2"></a>



  
</div>



<style>
    .marquee {
  width: 150px;
  overflow: hidden;
 
  
}
</style>
<script>
   var $mq=$(".marquee").marquee();
</script>
<script>
var playerLoaded=false;
function communityMusicView(){
    if(playerLoaded==false){
        playerLoaded=true;
    Player.init();
    }else{
        console.log("Enjoy the music!")
    }
}

</script>
<script>
function getAllSongs(){
axios.get('/music/song/getAll')
    .then(function (response) {
        // handle success
        console.log(response.data);
        resultsSongsLoop(response.data);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}



function resultsSongsLoop(data){
	document.getElementById("songList").innerHTML = "";
	$.each(data, function(i,item){
	var artist = data[i].artist;
	var songName = item.songName;
    var id = "songID"+item.id;
	var durationMins = item.durationMins;
	var durationSecs = item.durationSecs;
    var urlLocation = item.urlLocation;
    if (durationMins < 10){
        durationMins = "0"+durationMins;
    }
    if (durationSecs < 10){
        durationSecs = "0"+durationSecs;
    }
$('#songList').append(`



  <li id="${id}" url-key="${urlLocation}" artist-key="${artist}" songName-key="${songName}" class="row songListItem" style=" border-bottom: 1px solid #313F50; padding-top:5px;padding-bottom:5px;">
    <div class="col-2" style="padding-right:0;padding-left:0; bottom:3px;">
    <p id="minutes" style="margin:0; font-size: 20px;color:#7c7c7c;text-align: center;">${durationMins}</p>
    <p id="seconds" style="margin:0; font-size: 20px;color:#7c7c7c;text-align: center;">${durationSecs}</p>
     
    </div>
    <div class="col-9" style="padding-left:0;">
    <p id="title" style="margin:0;color:#7c7c7c">${songName}</p>
    <p id="artist" style="margin:0;color:#505050;font-size:12;">${artist}</p>
    </div>

  </li>



`);
	});
	
	

}


</script>
<script>
var prevSongOnList;
var nextSongOnList;
$('#songList').on('click','.songListItem',function(){
    Player.playing=true;
    var id=$(this).attr('id');
    var songURL= $(this).attr('url-key');
    var artist=$(this).attr('artist-key');
    var song=$(this).attr('songName-key');
    var marquee= song +" - " + artist;
    prevSongOnList= $(this).prev().attr('id');
    nextSongOnList= $(this).next().attr('id');
    
    $( "#playIcon" ).remove();
   $(this).append(`
   <div id="playIcon" class="col-1" style="padding:0;">

<span class="fa fa-play" style="font-size: 22px;line-height: 40px; color:white;"></span>

</div>
   `);
   Player.loadTrack(songURL);
   Controls.playButton.style.display = 'none';
                Controls.pauseButton.style.display = 'inline-block';
                Controls.playing = true;

    $('#songArtist').text(artist);
    $('#songName').text(song);

    
    
    $mq="";
    document.getElementById("marqueeAppend").innerHTML = "";
    $("#marqueeAppend").append(`
    <div class="marquee"  data-direction= 'left'
  data-pauseOnHover= 'true'
  data-gap= '90'
  data-duplicated='true' 
  ><p id="marqueeTextId" style="margin:0;color:#7c7c7c">${marquee}</p></div>
   `);
   $mq=$(".marquee").marquee();
    


    
});


</script>
<style>
.songListItem {
  transition: all 1s ease;
  cursor: default;
}

.song{
  
  cursor: default;
}

.songListItem:hover{
    background-color: #1d2530;
}
</style>
    <style>
    * {
    margin: 0;
    padding: 0;

}

#canvasPlayer {
    display: block;
}




.player {
    width: 740px;
    height: 740px;
    margin-left: -370px;
    margin-top: -370px;
    display: block;
    position: absolute;
    left: 50%;
    top: 50%;
}

.player .playarea {
    position: absolute;
    top: 50%;
    left: 50%;
    height: 126px;
    width: 320px;
    margin-top: -63px;
    margin-left: -160px;
}

.player .playarea div {
    display: inline-block;
}

.player .playarea .play {
    cursor: pointer;
    opacity: 0.85;
    vertical-align: middle;
    margin: 0 26px;
    border: 3px solid #FE4365;
    border-radius: 120px;
    width: 120px;
    height: 120px;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNDVweCIgaGVpZ2h0PSI1NXB4IiB2aWV3Qm94PSIwIDAgNDUgNTUiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPnBsYXktPC90aXRsZT4gICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+ICAgIDxkZWZzPiAgICAgICAgPGZpbHRlciB4PSItNTAlIiB5PSItNTAlIiB3aWR0aD0iMjAwJSIgaGVpZ2h0PSIyMDAlIiBmaWx0ZXJVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIGlkPSJmaWx0ZXItMSI+ICAgICAgICAgICAgPGZlT2Zmc2V0IGR4PSIwIiBkeT0iMCIgaW49IlNvdXJjZUFscGhhIiByZXN1bHQ9InNoYWRvd09mZnNldE91dGVyMSI+PC9mZU9mZnNldD4gICAgICAgICAgICA8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxLjUiIGluPSJzaGFkb3dPZmZzZXRPdXRlcjEiIHJlc3VsdD0ic2hhZG93Qmx1ck91dGVyMSI+PC9mZUdhdXNzaWFuQmx1cj4gICAgICAgICAgICA8ZmVDb2xvck1hdHJpeCB2YWx1ZXM9IjAgMCAwIDAgMC45NDI0NzI1NjIgICAwIDAgMCAwIDAuOTYxNzk0NTYyICAgMCAwIDAgMCAwLjk4MjE5NjAwMyAgMCAwIDAgMC4zNSAwIiBpbj0ic2hhZG93Qmx1ck91dGVyMSIgdHlwZT0ibWF0cml4IiByZXN1bHQ9InNoYWRvd01hdHJpeE91dGVyMSI+PC9mZUNvbG9yTWF0cml4PiAgICAgICAgICAgIDxmZU1lcmdlPiAgICAgICAgICAgICAgICA8ZmVNZXJnZU5vZGUgaW49InNoYWRvd01hdHJpeE91dGVyMSI+PC9mZU1lcmdlTm9kZT4gICAgICAgICAgICAgICAgPGZlTWVyZ2VOb2RlIGluPSJTb3VyY2VHcmFwaGljIj48L2ZlTWVyZ2VOb2RlPiAgICAgICAgICAgIDwvZmVNZXJnZT4gICAgICAgIDwvZmlsdGVyPiAgICA8L2RlZnM+ICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPiAgICAgICAgPGcgaWQ9IlBsYXllci12ZXJzaW9uLTEiIHNrZXRjaDp0eXBlPSJNU0FydGJvYXJkR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00ODIuMDAwMDAwLCAtMjk2LjAwMDAwMCkiIGZpbHRlcj0idXJsKCNmaWx0ZXItMSkiIGZpbGw9IiNGRTQzNjUiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik00ODUsMzE0LjM1MDE1NCBMNDg1LDM0OCBMNTI1LDMyNC4wMzI2MDkgTDQ4NSwyOTkgTDQ4NSwzMTQuMzUwMTU0IFoiIGlkPSJwbGF5LSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPC9nPiAgICA8L2c+PC9zdmc+) 41px 34px no-repeat;
    background-size: 45px 55px;
}

.player .playarea .pause {
    display: none;
    cursor: pointer;
    opacity: 0.85;
    vertical-align: middle;
    margin: 0 26px;
    border: 3px solid #FE4365;
    border-radius: 120px;
    width: 120px;
    height: 120px;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iMzRweCIgaGVpZ2h0PSI1MXB4IiB2aWV3Qm94PSIwIDAgMzQgNTEiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPkxpbmU8L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+PC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4gICAgICAgIDxnIGlkPSJQbGF5ZXItdmVyc2lvbi0xIiBza2V0Y2g6dHlwZT0iTVNBcnRib2FyZEdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNDgyLjAwMDAwMCwgLTI5OC4wMDAwMDApIiBzdHJva2U9IiNGRTQzNjUiIHN0cm9rZS1vcGFjaXR5PSIwLjg1IiBmaWxsPSIjRkU0MzY1IiBzdHJva2UtbGluZWNhcD0ic3F1YXJlIiBmaWxsLW9wYWNpdHk9IjAuODUiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik00ODMsMzAxLjI2ODUxOSBMNDgzLDM0NS43MzE0ODEgTDQ4MywzNDggTDQ4OC4wNzI0NjQsMzQ4IEw0ODguMDcyNDY0LDM0NS43MzE0ODEgTDQ4OC4wNzI0NjQsMzAxLjI2ODUxOSBMNDg4LjA3MjQ2NCwyOTkgTDQ4MywyOTkgTDQ4MywzMDEuMjY4NTE5IFogTTUwOS45Mjc1MzYsMzAxLjI2ODUxOSBMNTA5LjkyNzUzNiwzNDUuNzMxNDgxIEw1MDkuOTI3NTM2LDM0OCBMNTE1LDM0OCBMNTE1LDM0NS43MzE0ODEgTDUxNSwzMDEuMjY4NTE5IEw1MTUsMjk5IEw1MDkuOTI3NTM2LDI5OSBMNTA5LjkyNzUzNiwzMDEuMjY4NTE5IFoiIGlkPSJMaW5lIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+ICAgICAgICA8L2c+ICAgIDwvZz48L3N2Zz4=) 42px 35px no-repeat;
    background-size: 35px 51px;
}

.player .playarea .prevSong {
    cursor: pointer;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNjZweCIgaGVpZ2h0PSI0M3B4IiB2aWV3Qm94PSIwIDAgNjYgNDMiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPnJld2luZDwvdGl0bGU+ICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPiAgICA8ZGVmcz4gICAgICAgIDxmaWx0ZXIgeD0iLTUwJSIgeT0iLTUwJSIgd2lkdGg9IjIwMCUiIGhlaWdodD0iMjAwJSIgZmlsdGVyVW5pdHM9Im9iamVjdEJvdW5kaW5nQm94IiBpZD0iZmlsdGVyLTEiPiAgICAgICAgICAgIDxmZU9mZnNldCBkeD0iMCIgZHk9IjAiIGluPSJTb3VyY2VBbHBoYSIgcmVzdWx0PSJzaGFkb3dPZmZzZXRPdXRlcjEiPjwvZmVPZmZzZXQ+ICAgICAgICAgICAgPGZlR2F1c3NpYW5CbHVyIHN0ZERldmlhdGlvbj0iMS41IiBpbj0ic2hhZG93T2Zmc2V0T3V0ZXIxIiByZXN1bHQ9InNoYWRvd0JsdXJPdXRlcjEiPjwvZmVHYXVzc2lhbkJsdXI+ICAgICAgICAgICAgPGZlQ29sb3JNYXRyaXggdmFsdWVzPSIwIDAgMCAwIDAuOTQxMTc2NDcxICAgMCAwIDAgMCAwLjk2MDc4NDMxNCAgIDAgMCAwIDAgMC45ODAzOTIxNTcgIDAgMCAwIDAuMzUgMCIgaW49InNoYWRvd0JsdXJPdXRlcjEiIHR5cGU9Im1hdHJpeCIgcmVzdWx0PSJzaGFkb3dNYXRyaXhPdXRlcjEiPjwvZmVDb2xvck1hdHJpeD4gICAgICAgICAgICA8ZmVNZXJnZT4gICAgICAgICAgICAgICAgPGZlTWVyZ2VOb2RlIGluPSJzaGFkb3dNYXRyaXhPdXRlcjEiPjwvZmVNZXJnZU5vZGU+ICAgICAgICAgICAgICAgIDxmZU1lcmdlTm9kZSBpbj0iU291cmNlR3JhcGhpYyI+PC9mZU1lcmdlTm9kZT4gICAgICAgICAgICA8L2ZlTWVyZ2U+ICAgICAgICA8L2ZpbHRlcj4gICAgPC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4gICAgICAgIDxnIGlkPSJQbGF5ZXItdmVyc2lvbi0xIiBza2V0Y2g6dHlwZT0iTVNBcnRib2FyZEdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMzQyLjAwMDAwMCwgLTMwMi4wMDAwMDApIiBmaWx0ZXI9InVybCgjZmlsdGVyLTEpIiBmaWxsPSIjRkU0MzY1IiBmaWxsLW9wYWNpdHk9IjAuODUiPiAgICAgICAgICAgIDxwYXRoIGQ9Ik0zNDUsMzA1IEwzNDUsMzQyIEwzNzUsMzIzLjkwMjE3NCBMMzQ1LDMwNSBMMzQ1LDMwNSBaIE0zNzUsMzA1IEwzNzUsMzQyIEw0MDUsMzIzLjc3NjEyIEwzNzUsMzA1IEwzNzUsMzA1IFoiIGlkPSJyZXdpbmQiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDM3NS4wMDAwMDAsIDMyMy41MDAwMDApIHNjYWxlKC0xLCAxKSB0cmFuc2xhdGUoLTM3NS4wMDAwMDAsIC0zMjMuNTAwMDAwKSAiPjwvcGF0aD4gICAgICAgIDwvZz4gICAgPC9nPjwvc3ZnPg==) 0 0 no-repeat;
}

.player .playarea .nextSong {
    cursor: pointer;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iNjZweCIgaGVpZ2h0PSI0M3B4IiB2aWV3Qm94PSIwIDAgNjYgNDMiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPmZvcndhcmQ8L3RpdGxlPiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4gICAgPGRlZnM+ICAgICAgICA8ZmlsdGVyIHg9Ii01MCUiIHk9Ii01MCUiIHdpZHRoPSIyMDAlIiBoZWlnaHQ9IjIwMCUiIGZpbHRlclVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgaWQ9ImZpbHRlci0xIj4gICAgICAgICAgICA8ZmVPZmZzZXQgZHg9IjAiIGR5PSIwIiBpbj0iU291cmNlQWxwaGEiIHJlc3VsdD0ic2hhZG93T2Zmc2V0T3V0ZXIxIj48L2ZlT2Zmc2V0PiAgICAgICAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjEuNSIgaW49InNoYWRvd09mZnNldE91dGVyMSIgcmVzdWx0PSJzaGFkb3dCbHVyT3V0ZXIxIj48L2ZlR2F1c3NpYW5CbHVyPiAgICAgICAgICAgIDxmZUNvbG9yTWF0cml4IHZhbHVlcz0iMCAwIDAgMCAwLjk0MTE3NjQ3MSAgIDAgMCAwIDAgMC45NjA3ODQzMTQgICAwIDAgMCAwIDAuOTgwMzkyMTU3ICAwIDAgMCAwLjM1IDAiIGluPSJzaGFkb3dCbHVyT3V0ZXIxIiB0eXBlPSJtYXRyaXgiIHJlc3VsdD0ic2hhZG93TWF0cml4T3V0ZXIxIj48L2ZlQ29sb3JNYXRyaXg+ICAgICAgICAgICAgPGZlTWVyZ2U+ICAgICAgICAgICAgICAgIDxmZU1lcmdlTm9kZSBpbj0ic2hhZG93TWF0cml4T3V0ZXIxIj48L2ZlTWVyZ2VOb2RlPiAgICAgICAgICAgICAgICA8ZmVNZXJnZU5vZGUgaW49IlNvdXJjZUdyYXBoaWMiPjwvZmVNZXJnZU5vZGU+ICAgICAgICAgICAgPC9mZU1lcmdlPiAgICAgICAgPC9maWx0ZXI+ICAgIDwvZGVmcz4gICAgPGcgaWQ9IlBhZ2UtMSIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc2tldGNoOnR5cGU9Ik1TUGFnZSI+ICAgICAgICA8ZyBpZD0iUGxheWVyLXZlcnNpb24tMSIgc2tldGNoOnR5cGU9Ik1TQXJ0Ym9hcmRHcm91cCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTU5Mi4wMDAwMDAsIC0zMDIuMDAwMDAwKSIgZmlsbC1vcGFjaXR5PSIwLjg1IiBmaWx0ZXI9InVybCgjZmlsdGVyLTEpIiBmaWxsPSIjRkU0MzY1Ij4gICAgICAgICAgICA8cGF0aCBkPSJNNTk1LDMwNSBMNTk1LDM0MiBMNjI1LDMyMy45MDIxNzQgTDU5NSwzMDUgTDU5NSwzMDUgWiBNNjI1LDMwNSBMNjI1LDM0MiBMNjU1LDMyMy43NzYxMiBMNjI1LDMwNSBMNjI1LDMwNSBaIiBpZD0iZm9yd2FyZCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPiAgICAgICAgPC9nPiAgICA8L2c+PC9zdmc+) 0 0 no-repeat;
}

.player .playarea .prevSong,
.player .playarea .nextSong {
    vertical-align: middle;
    background-size: 66px 43px;
    width: 66px;
    height: 43px;
}

.player .playarea .prevSong:hover,
.player .playarea .nextSong:hover,
.player .playarea .pause:hover,
.player .playarea .play:hover,
.player .soundControl:hover {
    opacity: 0.7;
}

.player .song {
    font-family: Roboto, sans-serif;
    color: #FE4365;
    position: absolute;
    top: 225px;
    left: 0;
    width: 100%;
    text-align: center;
}

.player .song .artist {
    font-size: 22px;
    margin-bottom: 5px;
}

.player .song .name {
    font-size: 18px;
}

.player .soundControl {
    cursor: pointer;
    width: 31px;
    height: 27px;
    position: absolute;
    bottom: 240px;
    left: 50%;
    margin-left: -16px;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iMzFweCIgaGVpZ2h0PSIyN3B4IiB2aWV3Qm94PSIwIDAgMzEgMjciIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeG1sbnM6c2tldGNoPSJodHRwOi8vd3d3LmJvaGVtaWFuY29kaW5nLmNvbS9za2V0Y2gvbnMiPiAgICAgICAgPHRpdGxlPmhpZ2gtdm9sdW1lPC90aXRsZT4gICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+ICAgIDxkZWZzPiAgICAgICAgPGZpbHRlciB4PSItNTAlIiB5PSItNTAlIiB3aWR0aD0iMjAwJSIgaGVpZ2h0PSIyMDAlIiBmaWx0ZXJVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIGlkPSJmaWx0ZXItMSI+ICAgICAgICAgICAgPGZlT2Zmc2V0IGR4PSIwIiBkeT0iMCIgaW49IlNvdXJjZUFscGhhIiByZXN1bHQ9InNoYWRvd09mZnNldE91dGVyMSI+PC9mZU9mZnNldD4gICAgICAgICAgICA8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIxIiBpbj0ic2hhZG93T2Zmc2V0T3V0ZXIxIiByZXN1bHQ9InNoYWRvd0JsdXJPdXRlcjEiPjwvZmVHYXVzc2lhbkJsdXI+ICAgICAgICAgICAgPGZlQ29sb3JNYXRyaXggdmFsdWVzPSIwIDAgMCAwIDAuOTQxMTc2NDcxICAgMCAwIDAgMCAwLjk2MDc4NDMxNCAgIDAgMCAwIDAgMC45ODAzOTIxNTcgIDAgMCAwIDAuMzUgMCIgaW49InNoYWRvd0JsdXJPdXRlcjEiIHR5cGU9Im1hdHJpeCIgcmVzdWx0PSJzaGFkb3dNYXRyaXhPdXRlcjEiPjwvZmVDb2xvck1hdHJpeD4gICAgICAgICAgICA8ZmVNZXJnZT4gICAgICAgICAgICAgICAgPGZlTWVyZ2VOb2RlIGluPSJzaGFkb3dNYXRyaXhPdXRlcjEiPjwvZmVNZXJnZU5vZGU+ICAgICAgICAgICAgICAgIDxmZU1lcmdlTm9kZSBpbj0iU291cmNlR3JhcGhpYyI+PC9mZU1lcmdlTm9kZT4gICAgICAgICAgICA8L2ZlTWVyZ2U+ICAgICAgICA8L2ZpbHRlcj4gICAgPC9kZWZzPiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4gICAgICAgIDxnIGlkPSJQbGF5ZXItdmVyc2lvbi0xIiBza2V0Y2g6dHlwZT0iTVNBcnRib2FyZEdyb3VwIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNDgzLjAwMDAwMCwgLTQyNS4wMDAwMDApIiBmaWxsLW9wYWNpdHk9IjAuOCIgZmlsdGVyPSJ1cmwoI2ZpbHRlci0xKSIgZmlsbD0iI0ZFNDM2NSI+ICAgICAgICAgICAgPHBhdGggZD0iTTUwOC4wMDY2MzQsNDI3IEM1MTAuNTE0ODQ4LDQzMC4xNzU0ODQgNTEyLDQzNC4xODQ0NjMgNTEyLDQzOC41NDI0NyBDNTEyLDQ0Mi44NjE3MSA1MTAuNTQxMTUzLDQ0Ni44MzgxMDQgNTA4LjA3MzMyNiw0NTAgTDUwNi45NDMyNjksNDQ5LjE1MzQwNSBDNTA5LjI1OTIwNiw0NDYuMTgwMjQ0IDUxMC42NDk5OTksNDQyLjUxMTY5MSA1MTAuNjQ5OTk5LDQzOC41NDI0NyBDNTEwLjY0OTk5OSw0MzQuNTI5NDcyIDUwOS4yMjgzNTgsNDMwLjgyMzgwOSA1MDYuODY2MzAyLDQyNy44MzM0MTQgTDUwOC4wMDY2MzQsNDI3IEw1MDguMDA2NjM0LDQyNyBaIE01MDMuNjcwMjEyLDQ0Ni43MDEzNTggQzUwNS40OTczMjgsNDQ0LjQzNjg2IDUwNi41OTk5OTksNDQxLjYwOTMzMSA1MDYuNTk5OTk5LDQzOC41NDI0NjkgQzUwNi41OTk5OTksNDM1LjQxNDc0IDUwNS40NTMxMjQsNDMyLjUzNTkzNyA1MDMuNTYwNTcsNDMwLjI0OTQxOSBMNTAyLjU4MjY1OCw0MzAuOTY0MTI5IEM1MDQuMjQ4MDEsNDMzLjA4NDYzOCA1MDUuMjUwMDAxLDQzNS43MDU2MyA1MDUuMjUwMDAxLDQzOC41NDI0NjkgQzUwNS4yNTAwMDEsNDQxLjMxMzU1NCA1MDQuMjkzOTIyLDQ0My44Nzg2ODEgNTAyLjY5NzM4Nyw0NDUuOTcyNTU1IEw1MDMuNjcwMjEyLDQ0Ni43MDEzNTggTDUwMy42NzAyMTIsNDQ2LjcwMTM1OCBaIE00OTkuNjk0ODIsNDQzLjcyMzE0OSBDNTAxLjEwNTE0MSw0NDIuMjkzMTQ3IDUwMS45NzMwNzcsNDQwLjM0NDU3NSA1MDEuOTczMDc3LDQzOC4xOTcwMDcgQzUwMS45NzMwNzcsNDM2LjE2NjYzMiA1MDEuMTk3MjgyLDQzNC4zMTQxMjYgNDk5LjkyMDgwNSw0MzIuOTA5NTUxIEw0OTguOTQyMDkxLDQzMy42MjQ4NDcgQzQ5OS45NzUwOTUsNDM0Ljg3MjYxNSA1MDAuNTk0MjMxLDQzNi40NjM4MzUgNTAwLjU5NDIzMSw0MzguMTk3MDA3IEM1MDAuNTk0MjMxLDQ0MC4wNDE3OTQgNDk5Ljg5Mjc4NCw0NDEuNzI1NzU2IDQ5OC43Mzc0MjUsNDQzLjAwNTkwNSBMNDk5LjY5NDgyLDQ0My43MjMxNDkgTDQ5OS42OTQ4Miw0NDMuNzIzMTQ5IFogTTQ4NSw0MzUuMjExMjI1IEw0ODUsNDQxLjg3MzcxNSBMNDg5LjcyNSw0NDIuNDk3NDk0IEw0ODkuNzI1LDQzNC41MDI1MDYgTDQ4NSw0MzUuMjExMjI1IEw0ODUsNDM1LjIxMTIyNSBaIE00ODkuNzI1LDQ0Mi41Mzk5NjQgTDQ5Ni40NzUsNDQ3LjIwMzcwOCBMNDk2LjQ3NSw0MjkuODgxMjMyIEw0ODkuNzI1LDQzNC41NDQ5NzYgTDQ4OS43MjUsNDQyLjUzOTk2NCBaIiBpZD0iaGlnaC12b2x1bWUiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiPjwvcGF0aD4gICAgICAgIDwvZz4gICAgPC9nPjwvc3ZnPg==);
    background-size: 31px 27px;
    text-align: center;
}

.player .soundControl.disable {
    opacity: 0.4;
}

.player .time {
    text-align: center;
    font-family: Roboto, sans-serif;
    color: #FE4365;
    position: absolute;
    left: 50%;
    margin-left: -22px;
    font-size: 20px;
    bottom: 190px;
}
    </style>

    <script>
var Framer = {

countTicks: 360,

frequencyData: [],

tickSize: 10,

PI: 360,

index: 0,

loadingAngle: 0,

init: function (scene) {
    this.canvas = document.querySelector('canvas');
    this.scene = scene;
    this.context = scene.context;
    this.configure();
},

configure: function () {
    this.maxTickSize = this.tickSize * 9 * this.scene.scaleCoef;
    this.countTicks = 360 * Scene.scaleCoef;
},

draw: function () {
    this.drawTicks();
    this.drawEdging();
},

drawTicks: function () {
    this.context.save();
    this.context.beginPath();
    this.context.lineWidth = 1;
    this.ticks = this.getTicks(this.countTicks, this.tickSize, [0, 90]);
    for (var i = 0, len = this.ticks.length; i < len; ++i) {
        var tick = this.ticks[i];
        this.drawTick(tick.x1, tick.y1, tick.x2, tick.y2);
    }
    this.context.restore();
},

drawTick: function (x1, y1, x2, y2) {
    var dx1 = parseInt(this.scene.cx + x1);
    var dy1 = parseInt(this.scene.cy + y1);

    var dx2 = parseInt(this.scene.cx + x2);
    var dy2 = parseInt(this.scene.cy + y2);

    var gradient = this.context.createLinearGradient(dx1, dy1, dx2, dy2);
    gradient.addColorStop(0, '#FE4365');
    gradient.addColorStop(0.6, '#FE4365');
    gradient.addColorStop(1, '#F5F5F5');
    this.context.beginPath();
    this.context.strokeStyle = gradient;
    this.context.lineWidth = 2;
    this.context.moveTo(this.scene.cx + x1, this.scene.cx + y1);
    this.context.lineTo(this.scene.cx + x2, this.scene.cx + y2);
    this.context.stroke();
},

setLoadingPercent: function (percent) {
    this.loadingAngle = percent * 2 * Math.PI;
},

drawEdging: function () {
    this.context.save();
    this.context.beginPath();
    this.context.strokeStyle = 'rgba(254, 67, 101, 0.5)';
    this.context.lineWidth = 1;

    var offset = Tracker.lineWidth / 2;
    this.context.moveTo(this.scene.padding + 2 * this.scene.radius1 - Tracker.innerDelta - offset, this.scene.padding + this.scene.radius1);
    this.context.arc(this.scene.cx, this.scene.cy, this.scene.radius1 - Tracker.innerDelta - offset, 0, this.loadingAngle, false);

    this.context.stroke();
    this.context.restore();
},

getTicks: function (count, size, animationParams) {
    size = 10;
    var ticks = this.getTickPoitns(count);
    var x1, y1, x2, y2, m = [], tick, k;
    var lesser = 160;
    var allScales = [];
    for (var i = 0, len = ticks.length; i < len; ++i) {
        var coef = 1 - i / (len * 2.5);
        var delta = ((this.frequencyData[i] || 0) - lesser * coef) * this.scene.scaleCoef;
        if (delta < 0) {
            delta = 0;
        }
        tick = ticks[i];
        if (animationParams[0] <= tick.angle && tick.angle <=  animationParams[1]) {
            k = this.scene.radius / (this.scene.radius - this.getSize(tick.angle, animationParams[0], animationParams[1]) - delta);
        } else {
            k = this.scene.radius / (this.scene.radius - (size + delta));
        }
        x1 = tick.x * (this.scene.radius1 - size);
        y1 = tick.y * (this.scene.radius1 - size);
        x2 = x1 * k;
        y2 = y1 * k;
        m.push({ x1: x1, y1: y1, x2: x2, y2: y2 });
        if (i < 20) {
            var scale = delta / 50;
            scale = scale < 1 ? 1 : scale;
            allScales.push(scale);
        }
    }
    var sum = allScales.reduce(function(pv, cv) { return pv + cv; }, 0) / allScales.length;
    this.canvas.style.transform = 'scale('+sum+')';
    return m;
},

getSize: function (angle, l, r) {
    var m = (r - l) / 2;
    var x = (angle - l);
    var h;

    if (x == m) {
        return this.maxTickSize;
    }
    var d = Math.abs(m - x);
    var v = 70 * Math.sqrt(1 / d);
    if (v > this.maxTickSize) {
        h = this.maxTickSize - d;
    } else {
        h = Math.max(this.tickSize, v);
    }

    if (this.index > this.count) {
        this.index = 0;
    }

    return h;
},

getTickPoitns: function (count) {
    var coords = [], step = this.PI / count;
    for (var deg = 0; deg < this.PI; deg += step) {
        var rad = deg * Math.PI / (this.PI / 2);
        coords.push({ x: Math.cos(rad), y: -Math.sin(rad), angle: deg });
    }
    return coords;
}
};
'use strict';

var Tracker = {

innerDelta: 20,

lineWidth: 7,

prevAngle: 0.5,

angle: 0,

animationCount: 10,

pressButton: false,

init: function (scene) {
    this.scene = scene;
    this.context = scene.context;
    this.initHandlers();
},

initHandlers: function () {
    var that = this;

},






startAnimation: function () {
    var that = this;
    var angle = this.angle;
    var l = Math.abs(this.angle) - Math.abs(this.prevAngle);
    var step = l / this.animationCount, i = 0;
    var f = function () {
        that.angle += step;
        if (++i == that.animationCount) {
            that.angle = angle;
            that.prevAngle = angle;
            that.animatedInProgress = false;
        } else {
            that.animateId = setTimeout(f, 20);
        }
    };

    this.angle = this.prevAngle;
    this.animateId = setTimeout(f, 20);
},

stopAnimation: function () {
    clearTimeout(this.animateId);
    this.animatedInProgress = false;
}
};
'use strict';


var Scene = {

padding: 80,

minSize: 740,

optimiseHeight: 1182,

_inProcess: false,

init: function () {
    this.canvasConfigure();
    this.initHandlers();

    Framer.init(this);
    Tracker.init(this);
    Controls.init(this);

    this.startRender();
},

canvasConfigure: function () {
            this.canvas = document.querySelector('canvas');
            this.context = this.canvas.getContext('2d');
            this.context.strokeStyle = '#FE4365';
            this.calculateSize();
        },

        calculateSize: function () {
            this.scaleCoef = Math.max(0.5, 780/ this.optimiseHeight);

            var size = Math.max(this.minSize, 1/*document.body.clientHeight */);
            var size1 = Math.max(400, 1/*document.body.clientHeight */);    
            this.canvas.setAttribute('width', size1);
            this.canvas.setAttribute('height', size1);
            //this.canvas.style.marginTop = -size / 2 + 'px';
            //this.canvas.style.marginLeft = -size / 2 + 'px';

            this.width = size1;
            this.height = size1;

            this.radius = (size - this.padding * 2) / 2;
            this.radius1 = (size1 - this.padding * 2) / 2;
            this.cx = this.radius1 + this.padding;
            this.cy = this.radius1 + this.padding;
            this.coord = this.canvas.getBoundingClientRect();
        },

        initHandlers: function () {
            var that = this;
            
        },

        render: function () {
            var that = this;
            requestAnimationFrame(function () {
                that.clear();
                that.draw();
                if (that._inProcess) {
                    that.render();
                }
            });
        },

        clear: function () {
            this.context.clearRect(0, 0, this.width, this.height);
        },

        draw: function () {
            Framer.draw();
           
            Controls.draw();
        },

        startRender: function () {
            this._inProcess = true;
            this.render();
        },

        stopRender: function () {
            this._inProcess = false;
        },

        inProcess: function () {
            return this._inProcess;
        }
    };
    'use strict';

    var Controls = {

        playing: false,

        init: function (scene) {
            this.scene = scene;
            this.context = scene.context;
            this.initHandlers();
            this.timeControl = document.querySelector('.time');
        },

        initHandlers: function () {
            this.initPlayButton();
            this.initPauseButton();
            this.initSoundButton();
            this.initPrevSongButton();
            this.initNextSongButton();
            this.initTimeHandler();
        },

        initPlayButton: function () {
            var that = this;
            this.playButton = document.querySelector('.play');
            this.playButton.addEventListener('mouseup', function () {
                if(Player.playing==true){
                that.playButton.style.display = 'none';
                that.pauseButton.style.display = 'inline-block';
                Player.play();
                that.playing = true;
                }
            });
        },

        initPauseButton: function () {
            var that = this;
            this.pauseButton = document.querySelector('.pause');
            this.pauseButton.addEventListener('mouseup', function () {
                that.playButton.style.display = 'inline-block';
                that.pauseButton.style.display = 'none';
                Player.pause();
                that.playing = false;
            });
        },

        initSoundButton: function () {
            var that = this;
            this.soundButton = document.querySelector('.soundControl');
            this.soundButton.addEventListener('mouseup', function () {
                if (that.soundButton.classList.contains('disable')) {
                    that.soundButton.classList.remove('disable');
                    Player.unmute();
                } else {
                    that.soundButton.classList.add('disable');
                    Player.mute();
                }
            });
        },

        initPrevSongButton: function () {
            var that = this;
            this.prevSongButton = document.querySelector('.prevSong');
            this.prevSongButton.addEventListener('mouseup', function () {
                Player.prevTrack();
                that.playing && Player.play();
            });
        },

        initNextSongButton: function () {
            var that = this;
            this.nextSongButton = document.querySelector('.nextSong');
            this.nextSongButton.addEventListener('mouseup', function () {
                Player.nextTrack();
                that.playing && Player.play();
            });
        },

        initTimeHandler: function () {
            var that = this;
            if(Player.audioPlaying==true){
            setTimeout(function () {
                var rawTime = parseInt(Player.audio.currentTime || 0);
                var secondsInMin = 60;
                var min = parseInt(rawTime / secondsInMin);
                var seconds = rawTime - min * secondsInMin;
                if (min < 10) {
                    min = '0' + min;
                }
                if (seconds < 10) {
                    seconds = '0' + seconds;
                }
                time = min + ':' + seconds;
                that.timeControl.textContent = time;
                that.initTimeHandler();
                //console.log("time handler Function");
                audioBarUpdate();
            }, 300);}
        },

        draw: function () {
            this.drawPic();
        },

        drawPic: function () {
            this.context.save();
            this.context.beginPath();
            this.context.fillStyle = 'rgba(254, 67, 101, 0.85)';
            this.context.lineWidth = 1;
            var x = Tracker.r / Math.sqrt(Math.pow(Math.tan(Tracker.angle), 2) + 1);
            var y = Math.sqrt(Tracker.r * Tracker.r - x * x);
            if (this.getQuadrant() == 2) {
                x = -x;
            }
            if (this.getQuadrant() == 3) {
                x = -x;
                y = -y;
            }
            if (this.getQuadrant() == 4) {
                y = -y;
            }
            this.context.arc(this.scene.radius1 + this.scene.padding + x, this.scene.radius1 + this.scene.padding + y, 10, 0, Math.PI * 2, false);
            this.context.fill();
            this.context.restore();
        },

        getQuadrant: function () {
            if (0 <= Tracker.angle && Tracker.angle < Math.PI / 2) {
                return 1;
            }
            if (Math.PI / 2 <= Tracker.angle && Tracker.angle < Math.PI) {
                return 2;
            }
            if (Math.PI < Tracker.angle && Tracker.angle < Math.PI * 3 / 2) {
                return 3;
            }
            if (Math.PI * 3 / 2 <= Tracker.angle && Tracker.angle <= Math.PI * 2) {
                return 4;
            }
        }
    };
    'use strict';

    var Player = {

buffer: null,

duration: 0,

tracks: [
    {
        artist: "Kavinsky",
        song: "Odd Look ft. The Weeknd",
        url: "/music/DnB/Makoto/Makoto - Wading Through Crowds (feat. Karina Ramage).mp3"
    }
],

playing: false,

init: function () {
    window.AudioContext = window.AudioContext || window.webkitAudioContext;
    this.context = new AudioContext();
    this.audio= document.querySelector('audio');
    this.audioPlaying=false;
    //this.audio.src = '/music/DnB/Makoto/Makoto - Wading Through Crowds (feat. Karina Ramage).mp3';
    
    this.audio.addEventListener("canplaythrough", event => {
/* the audio is now playable; play it if permissions allow */
console.log("CanPlayThrough")

});
this.audio.addEventListener('play', function() { 
/* do something */ 

Player.audioPlaying=true;
console.log("playing " + Player.audioPlaying);
Controls.initTimeHandler();
});
this.audio.addEventListener('pause', function() { 
/* do something */ 
Player.audioPlaying=false;
console.log("playing " + Player.audioPlaying)
});

this.audio.addEventListener('ended', (event) => {
  console.log('Video stopped either because 1) it was over, ' +
      'or 2) no further data is available.');
      Player.nextTrack();
});



    
    this.firstLaunch = true;
    try {
        this.javascriptNode = this.context.createScriptProcessor(2048, 1, 1);
        this.javascriptNode.connect(this.context.destination);
        this.analyser = this.context.createAnalyser();
        this.analyser.connect(this.javascriptNode);
        this.analyser.smoothingTimeConstant = 0.6;
        this.analyser.fftSize = 2048;
        this.source = this.context.createMediaElementSource(this.audio);
        this.destination = this.context.destination;
        //this.loadTrack(0);

        this.gainNode = this.context.createGain();
        this.source.connect(this.gainNode);
        this.gainNode.connect(this.analyser);
        this.gainNode.connect(this.destination);

        this.initHandlers();
    } catch (e) {
        Framer.setLoadingPercent(1);
    }
    Framer.setLoadingPercent(1);
    Scene.init();
},


loadTrack: function (url) {
    Player.audio.src = url;
},
loadTrackSeek: function (index) {
    var that = this;
    var request = new XMLHttpRequest();
    var track = this.tracks[index];
    document.querySelector('.song .artist').textContent = track.artist;
    document.querySelector('.song .name').textContent = track.song;
    this.currentSongIndex = index;

    request.open('GET', track.url, true);
    request.responseType = 'arraybuffer';

    request.onload = function() {
        that.context.decodeAudioData(request.response, function(buffer) {
            that.source.buffer = buffer;
        }).then(function() {});
    };

    request.send();
},
endTrack: function () {
this.javascriptNode.disconnect();
this.destination.disconnect();
this.source.disconnect();
this.gainNode.disconnect();
this.context.close().then(function() {console.log("closed")});
this.analyser.disconnect();
var that = this;
this.source.disconnect();
that.source.disconnect();
Player.buffer=null;
buffer=null;




that.source.stop();

Player.init();


},




nextTrack: function () {

    if(nextSongOnList==undefined){console.log("no next song")
        Controls.playButton.style.display = 'inline-block';
        Controls.pauseButton.style.display = 'none';
                Player.pause();
                Controls.playing = false;
        
    }
    else{
                 
$("#"+nextSongOnList).each(function() {
    
    
    
    var songURL= $(this).attr('url-key');
    var artist=$(this).attr('artist-key');
    var song=$(this).attr('songName-key');
    prevSongOnList= $(this).prev().attr('id');
    nextSongOnList= $(this).next().attr('id');
    
    $( "#playIcon" ).remove();
   $(this).append(`
   <div id="playIcon" class="col-1" style="padding:0;">

<span class="fa fa-play" style="font-size: 22px;line-height: 40px; color:white;"></span>

</div>
   `);
   Player.loadTrack(songURL);
   Controls.playButton.style.display = 'none';
                Controls.pauseButton.style.display = 'inline-block';
                Controls.playing = true;

    $('#songArtist').text(artist);
    $('#songName').text(song);


});

 
}
},

prevTrack: function () {
    if(prevSongOnList==undefined){console.log("no prev song")
        if(countPrev==0){
            countPrev=1;
            Player.audio.currentTime=0;
            Player.play();
            Controls.playButton.style.display = 'none';
        Controls.pauseButton.style.display = 'inline-block' ;
        setTimeout(function(){ countPrev=0 }, 2000);
        }else{
            countPrev=0;
        Controls.playButton.style.display = 'inline-block';
        Controls.pauseButton.style.display = 'none';
                Player.pause();
                Controls.playing = false;
        }
    }
    else{
        if(countPrev==0){
            countPrev=1;
            Player.audio.currentTime=0;
            Player.play();
            Controls.playButton.style.display = 'none';
        Controls.pauseButton.style.display = 'inline-block' ;
        setTimeout(function(){ countPrev=0 }, 2000);
        }else
        $("#"+prevSongOnList).each(function() {
            countPrev=0;
            
    
    var songURL= $(this).attr('url-key');
    var artist=$(this).attr('artist-key');
    var song=$(this).attr('songName-key');
    prevSongOnList= $(this).prev().attr('id');
    nextSongOnList= $(this).next().attr('id');
    
    $( "#playIcon" ).remove();
   $(this).append(`
   <div id="playIcon" class="col-1" style="padding:0;">

<span class="fa fa-play" style="font-size: 22px;line-height: 40px; color:white;"></span>

</div>
   `);
   Player.loadTrack(songURL);
   Controls.playButton.style.display = 'none';
                Controls.pauseButton.style.display = 'inline-block';
                Controls.playing = true;

    $('#songArtist').text(artist);
    $('#songName').text(song);


});
}

},
seek: function(){
    Player.audio.currentTime = seekTime;
},
play: function () {
    if(Player.playing==true){
    Player.audio.play();
    }
    
    //Player.audio.volume = 0.2;
    //console.log("sadasdasdasd")
},

stop: function () {
    //this.context.currentTime = 0;
    //this.context.suspend();
},

pause: function () {
    if(Player.playing==true){
    Player.audio.pause();
    }
    //this.context.suspend();
},

mute: function () {
    this.gainNode.gain.value = 0;
},

unmute: function () {
    this.gainNode.gain.value = 1;
},

initHandlers: function () {
    var that = this;

    this.javascriptNode.onaudioprocess = function() {
        Framer.frequencyData = new Uint8Array(that.analyser.frequencyBinCount);
        that.analyser.getByteFrequencyData(Framer.frequencyData);
    };
}
};
var time;
var timehandler;
var fuck;
var seekTime=0;
var timeTrack=0;
var myAudio;
var countPrev=0;


function myFunction(){
Player.init();

}
function myFunction3(){
Player.loadTrack();
          
}


function audioBarUpdate(){
    //console.log("test up "+updateAudioBar);
    if(updateAudioBar==true){
        //console.log("sadassdfsdfsdfsdfsdfsdfsdfsdfasfdasdas");
    $('.range').val((Player.audio.currentTime/Player.audio.duration)*100);
    
    var val = (Player.audio.currentTime/Player.audio.duration)*100;
    //console.log((Player.audio.currentTime/Player.audio.duration)*100)
    parseInt(val);
    $('.range').css(
      'background',
      'linear-gradient(to right, #527189 0%, #527189 ' + val + '%, #777 ' + val + '%, #444 100%)'
    );
}
}

</script>

















































































































<!-- SeekBar -->

<style>




.range {
  -webkit-appearance: none;
  background: linear-gradient(to right,
    #527189 0%, #527189 50%,
    #444 50%, #444 62.5%,
    #444 62.5%, #444 100%);
  cursor: pointer;
  height: 3px;
  margin: 0;
  transition: 0.1s ease-in;
  vertical-align: bottom;
  width: 50%;
}
.wrapBar:hover .range,
.wrapBar.hover .range { height: 8px; }

.range::-webkit-slider-thumb {
  -webkit-appearance: none;
  background: #527189;
  border-radius: 8px;
  box-shadow: inset 0 0 0 5px #eaeaea;
  height: 0;
  transition: 0.1s ease-in;
  width: 0;
}
.wrapBar:hover .range::-webkit-slider-thumb,
.wrapBar.hover .range::-webkit-slider-thumb {
  width: 16px;
  height: 16px;
}

.loaded .range,
.loaded .range::-webkit-slider-thumb {
  transition: 0.1s ease-in;
}

:focus {
  outline: none;
}

</style>


<script>
var updateAudioBar=true;
$(function() {
  
  $('.wrapBar').addClass('loaded');
  
  $('.range').bind('change mousemove', function() {
   
    var val = $(this).val();
    parseInt(val);
    $(this).css(
      'background',
      'linear-gradient(to right, #527189 0%, #527189 ' + val + '%, #777 ' + val + '%, #444 100%)'
    );
    //Player.audio.currentTime=(val/100) *Player.audio.duration;
  });



  $('.range').bind('change touchmove', function() {
   
   var val = $(this).val();
   parseInt(val);
   $(this).css(
     'background',
     'linear-gradient(to right, #527189 0%, #527189 ' + val + '%, #777 ' + val + '%, #444 100%)'
   );
   //Player.audio.currentTime=(val/100) *Player.audio.duration;
 });

  $('.range').mouseup(function () {
    var val = $(this).val();
    parseInt(val);
    Player.audio.currentTime=(val/100) *Player.audio.duration;
    updateAudioBar=true;

    var rawTime = parseInt(Player.audio.currentTime || 0);
                var secondsInMin = 60;
                var min = parseInt(rawTime / secondsInMin);
                var seconds = rawTime - min * secondsInMin;
                if (min < 10) {
                    min = '0' + min;
                }
                if (seconds < 10) {
                    seconds = '0' + seconds;
                }
                time = min + ':' + seconds;
                Controls.timeControl.textContent = time;
                console.log("seeked to: "+Controls.timeControl.textContent)

    
    
  });

  $('.range').on('touchend',function () {
    var val = $(this).val();
    parseInt(val);
    Player.audio.currentTime=(val/100) *Player.audio.duration;
    updateAudioBar=true;

    var rawTime = parseInt(Player.audio.currentTime || 0);
                var secondsInMin = 60;
                var min = parseInt(rawTime / secondsInMin);
                var seconds = rawTime - min * secondsInMin;
                if (min < 10) {
                    min = '0' + min;
                }
                if (seconds < 10) {
                    seconds = '0' + seconds;
                }
                time = min + ':' + seconds;
                Controls.timeControl.textContent = time;
                console.log("seeked to: "+Controls.timeControl.textContent)

    
    
  });



  $('.range').mousedown(function () {
    updateAudioBar=false;
  });

  $('.range').on('touchstart',function () {
    updateAudioBar=false;
  });


  var timeout;
  $('.wrapBar').bind('focusin mouseover mousedown touchstart hover', function() {
    window.clearTimeout(timeout);
    $(this).addClass('hover');
  });



  $('.wrapBar').bind('focusout mouseout touchend mouseup', function() {
    window.clearTimeout(timeout);
    timeout = setTimeout(function(){removeHoverClass();}, 1000);
  });
  function removeHoverClass() {
    if (!$('.wrapBar').is(":hover")) {
      $('.wrapBar').removeClass('hover');
    }
  }
  
});
</script>





<style>

body.nav-open2 {
  overflow: hidden;
}

#ocn2 {
  background: #F0F8FF;
  bottom: 0;
  overflow-y: auto;
  position: fixed;
  right: -320px;
  top: 0;
  width: 320px;
  -webkit-transition: all 300ms;
  transition: all 300ms;
  z-index: 9990;
}

.nav-open2 #ocn2 {
  -webkit-transform: translateX(-320px);
  transform: translateX(-320px);
}

#overlay2 {
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

.nav-open2 #overlay2 {
  opacity: 1;
  visibility: visible;
}

</style>

<script>
 (function($) {

 var navToggle2 = function() {
  $('body').on('click', '.nav-toggle2', function(ev) {
    ev.preventDefault();
    $('body').toggleClass('nav-open2');
   });
 };

 $(document).ready(function() {
   navToggle2();
 });
 })(jQuery);

 </script>

<script>
$(".toggle-sidebar2").on("click",function()
{
    $('body').toggleClass('nav-open2');

});


</script>
@endsection