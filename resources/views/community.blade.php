@extends('layouts.communityapp')

@section('content')
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











<div id="ocn">
    <div id="ocn-inner">
    


    <div class="card h-100">
  <div class="card-header">
    <p5 class="align-self-start">Chat</p5>
  </div>
  <div id="cardbody" class="card-body" style="overflow-y: auto; word-break: break-all;">
    <div id="messages">




    </div>
  </div>
  <div class="card-footer text-muted">

  <form id="inputForm" autocomplete="off">
  <div class="input-group mb-0">
  <input id="chatInputId" type="text" class="form-control" placeholder="send text" aria-label="send text" aria-describedby="basic-addon2" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit">Send</button>
  </div>
</div>
</form>

  </div>
</div>



    </div>
  </div>
  
 
  <a class="nav-toggle" id="overlay"></a>

<!--

<b-container fluid class="" style="height: calc(100vh - 104px);">
<b-row class="h-100">
<b-col cols="2" class="p-1">


<contact-list-component></contact-list-component>
</b-col>

</b-row>
</b-container>

-->
<div class="alert hide" style="position:fixed;">
  <span class="fa fa-exclamation-circle" style="font-size: 22px;line-height: 40px;"></span>
  <span id="messageAlert" class="msg">Room full! Ask for direct link.</span>
  <div class="close-btn">
    <span class="fa fa-times" style="font-size: 22px;line-height: 40px; color:gray"></span>
  </div>
</div>
</div>


<style>
#siteWrapper {
  overflow-x:hidden;
  width:100%;
  position: relative;
 
}
</style>

<style>


#myChat {
  margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    
    

}

</style>
<script>
var roomView=false;
     

   
  if (window.innerWidth <= 899 && window.innerWidth > 767) {
       $("#myChat").css("min-height","352px");
       $("#myChat").css("height","calc(-154px + 100vh)");
    }
    if (window.innerWidth > 900) {
      
        $("#myChat").css("min-height","400px");
        $("#myChat").css("height","calc(-154px + 100vh)");
        
   }

   if (window.innerWidth <= 766) {
      $("#myChat").css("height","400px");
    }
$(window).resize(function() {
  if(roomView==true){   
  if (window.innerWidth > 767) {
      
      $("#boxleftrightContainter").css("padding-right","15px");
      
 }
 if (window.innerWidth <= 766) {
       $("#boxleftrightContainter").css("padding-right","30px");
       $("#createRoomButton").css("display","inline-block");
       
    }

    if (window.innerWidth <= 899 && window.innerWidth > 767 ) {
      $("#createRoomButton").css("display","none");
      
    }

    if (window.innerWidth > 901) {
      $("#createRoomButton").css("display","inline-block");
      
    }
}      
    if (window.innerWidth <= 899 && window.innerWidth > 767 ) {
       $("#myChat").css("min-height","352px");
       $("#myChat").css("height","calc(-154px + 100vh)");
       $("#inputId").attr("placeholder", "");
       $("#communityMembersSearchRowId").css("display","none");
       $("#searchBoxMiddleId").css("display","flex");
    }

    if (window.innerWidth <= 766) {
      $("#myChat").css("height","400px");
      $("#inputId").attr("placeholder", "Search");
      $("#communityMembersSearchRowId").css("display","flex");
      $("#searchBoxMiddleId").css("display","none");
    }


    if (window.innerWidth > 900) {
      
        $("#myChat").css("min-height","400px");
        $("#myChat").css("height","calc(-154px + 100vh)");
        $("#inputId").attr("placeholder", "Search");
        $("#communityMembersSearchRowId").css("display","flex");
        $("#searchBoxMiddleId").css("display","none");
   }
 
    });
</script>
<script>
function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}


</script>
<style>
.flex-nowrap {
    -webkit-flex-wrap: nowrap!important;
    -ms-flex-wrap: nowrap!important;
    flex-wrap: nowrap!important;
}
.flex-row {
    display:flex;
    -webkit-box-orient: horizontal!important;
    -webkit-box-direction: normal!important;
    -webkit-flex-direction: row!important;
    -ms-flex-direction: row!important;
    flex-direction: row!important;
}
article:hover {
		border: 2px solid #ff9999;
	}
    #articlesImg:hover {
		border: 4px solid #ff9999;
	}

</style>
<script>
  var runAlertCode=true;
function communityRoomsView(){
  $( ".allCanvas" ).stop().clearQueue().finish();
    document.getElementById("view").innerHTML = "";

$('#view').append(`
<div class="row row-flex" style="overflow-y:auto;">
<div class="col-lg-9 col-md-9 col-xs-12" >

<div class="box">
<div class="box-left" style="height:100%;overflow-x:auto;">
<div class="container testimonial-group" style="height:100%;">
  <div id="roomList" class="row flex-row flex-nowrap text-center" style="display:flex;
    flex: 0 0 25%;height:100%;">
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
      <div class='search-box'>
        <form id="formSearchVideo" class='search-form'>
          <input autocomplete="off" id="inputId" class='form-control' placeholder='Search' type='text'>
          <button class='btn btn-link search-btn'>
            <i class='fa fa-search'></i>
          </button>
        </form>
      </div>
      <hr>
    </div>
  </div>
 
 <div class="row">
    <div class="col-md-12"> 
    <a onclick="createForm();" class="btn btn-default"><i id="createRoomButton" class="fa fa-star" style="display: inline-block;"></i> Create</a>
    </div>
    </div>


    <div class="container testimonial-group" style="margin-top: 10px;height:37%;">
<div id="category" class="row text-center" style="height:100%;">

<div class="col-6 p-1" style="height:98%; min-width:60px; max-width:85px;max-height:150px;" >
<article style="height:140px;" category-key="anime">
    <img  class="center"src="/category/anime.jpg"  alt="image" style="width: 90%;
  height: 100%; display: block;
    margin: 0 auto;
  "></img>
</article>
</div>
<div class="col-6 p-1" style="height:98%; min-width:60px; max-width:85px;max-height:150px;" >
<article style="height:140px;" category-key="games">
    <img  class="center"src="/category/games.jpg" alt="image" style="width: 90%;
  height: 100%; display: block;
    margin: 0 auto;
  "></img>
 

</article>
</div>
<div class="col-6 p-1" style="height:98%; min-width:60px; max-width:85px; max-height:150px;" >
<article style="height:140px;" category-key="music">
    <img  class="center"src="/category/music.jpg" alt="image" style="width: 90%;
  height: 100%; display: block;
    margin: 0 auto;
  "></img>
 

</article>
</div>
<div class="col-6 p-1" style="height:98%; min-width:60px; max-width:85px; max-height:150px;" >
<article style="height:140px;" category-key="comedy">
    <img  class="center"src="/category/comedy.jpg" alt="image" style="width: 90%;
  height: 100%; display: block;
    margin: 0 auto;
  "></img>
 

</article>
</div>
<div class="col-6 p-1" style="height:98%; min-width:60px; max-width:85px; max-height:150px;" >
<article style="height:140px;" category-key="other">
    <img  class="center"src="/category/other.jpg" alt="image" style="width: 90%;
  height: 100%; display: block;
    margin: 0 auto;
  "></img>
 

</article>
</div>

<div class="col-6 p-1" style="height:98%; min-width:60px; max-width:85px; max-height:150px;" >
<article style="height:140px;" category-key="All">
    <img  class="center"src="/category/all.jpg" alt="image" style="width: 90%;
  height: 100%; display: block;
    margin: 0 auto;
  "></img>
 

</article>
</div>
</div>
    
</div>
    


  
</div>
</div>

</div>

</div>


`);

particleCanvas.length = 0;//empty array
getAllRooms();


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
        console.log("room is full");
        console.log("runAlertCode = "+runAlertCode)
        if(runAlertCode==true){
          runAlertCode=false;
          $('#messageAlert').text("Room full! Ask for direct link.");
  $('.alert').addClass("show");
  $('.alert').removeClass("hide");
  $('.alert').addClass("showAlert");
  //add false to prevent alert code from running
  var alertcodeTimeout = setTimeout(function(){
    runAlertCode=true;
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");
    //add true to show alert again
  },5000);

$('.close-btn').click(function(){
  $('.alert').removeClass("show");
  $('.alert').addClass("hide");
  clearTimeout(alertcodeTimeout);//clears the function out of var timeout to reset timer.
  runAlertCode=true;
  //add true to show alert again
});
        }
    }else{
    //console.log("my result"+result);
                //location.replace(route('chat-rooms.show', room1));
                if(videoT=="youtube"){
                location.href=route('chat-rooms.show', result);
                }else{
                  location.href=route('chat-rooms.show', result);
                  //location.href=route('chat-roomsB.show', result);
                }
              }
            })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
        
});


$('#formSearchVideo').submit(function(event){

// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('inputId').value;
//console.log("enter or press"+ input);
document.getElementById('inputId').value='';
searchRooms(input);


});




if ($(window).width() <= 766) {
  $("#roomList").css("max-height","320px");

}

if ($(window).width() >= 767) {
  $("#roomList").css("max-height","500px");

}

roomView=true;
if (window.innerWidth <= 766) {
       $("#boxleftrightContainter").css("padding-right","30px");
       $("#createRoomButton").css("display","inline-block");
       $("#inputId").attr("placeholder", "Search");
      
      
       
    }
    if (window.innerWidth > 767) {
      
      $("#boxleftrightContainter").css("padding-right","15px");
     
 }
 if (window.innerWidth <= 901 && window.innerWidth > 767 ) {
      $("#createRoomButton").css("display","none");
      $("#inputId").attr("placeholder", "");
    }
    if (window.innerWidth > 901) {
      $("#createRoomButton").css("display","inline-block");
      $("#inputId").attr("placeholder", "Search");
    }


}
function communityMembersView(){
  document.getElementById("view").innerHTML = "";

  $('#view').append(`

<div class="row row-flex" style="overflow-y:auto;">



<div class="col-lg-9 col-md-9 col-xs-12"  >






 
 










<div class="title">


<div class='search-box' id="searchBoxMiddleId" style="display:none;">
        <form id="formSearchMiddle" class='search-form'>
          <input autocomplete="off" id="inputIdMiddle" class='form-control' placeholder='Search' type='text'>
          <button class='btn btn-link search-btn'>
            <i class='fa fa-search'></i>
          </button>
        </form>
      </div>



</div>
<div class="box">
<div id="articlesGroup" class="box-left" style="height:100%;overflow-y:auto;">

<div id="articles" style="height:100px;"></div>
<div id="articlesRequests" style="height:100px;"></div>

</div>
</div>
</div>


<div class="col-lg-3 col-md-3 col-xs-12">
<div class="box">
<div class="box-right">


<div id="communityMembersSearchRowId" class="row">
    <div class="col-md-12">
      <div class='search-box'>
        <form id="formSearch" class='search-form'>
          <input autocomplete="off" id="inputId" class='form-control' placeholder='Search' type='text'>
          <button class='btn btn-link search-btn'>
            <i class='fa fa-search'></i>
          </button>
        </form>
      </div>
      <hr>
    </div>
  </div>
 
 <div class="row">
    <div class="col-md-12"> 
    <div id="friendrequests">

</div>
    
    </div>
    </div>

    <div class="row">
    <div id="myBanner" class="col-md-12 mt-1"> 
    
    </div>
    </div>
  
</div>
</div>
</div>

</div>
</div>
</div>


        
        `);

        $('#articlesRequests').on('click','img',function(){
		id= $(this).attr('data-key');
		name=$(this).attr('data-name');
        thumb=$(this).attr('thumb-key');
		//$(this).clone().appendTo('#articles2');
        
        console.log("their id = "+id);//write here maybe the function to create an iframe video passing the video id.
        axios.get('/communityMembers/acceptFriendRequest/'+id)
    .then(function (response) {
        // handle success
        console.log(response);
        getFriendRequestsNames();
        createConversation(id,name);
        newFriendChat(id,thumb,name);
        newFriendChatMyself(id,thumb,name);
        getPendingCounts();
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 

       
	    });
$('#articles').on('click','article',function(){
		id= $(this).attr('data-key');
		
		//$(this).clone().appendTo('#articles2');
        keyword=$(this).attr('keyword');
        console.log("their id = "+keyword);//write here maybe the function to create an iframe video passing the video id.
        var friendshipStatus=$('p', this).text();
        console.log(friendshipStatus);
        
        if(friendshipStatus=="Not Friends/Friend Request not sent"){
        addFriend(id);
        searchUser(keyword);
        sendNotification("new friend request",id)
        }
	    });
$('#formSearch').submit(function(event){

// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('inputId').value;
console.log("enter or press"+ input);
document.getElementById('inputId').value='';
searchUser(input);


});


$('#formSearchMiddle').submit(function(event){

// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('inputIdMiddle').value;
console.log("enter or press"+ input);
document.getElementById('inputIdMiddle').value='';
searchUser(input);


});


getPendingCounts();


if (window.innerWidth <= 766) {
    $('#myBanner').append(`
<article id="articleBanner" class="col-3"  id-key="${myId}" name-key="${myName}" style="height:100%;   display: block; min-width:80px;
  margin-left: auto;
  margin-right: auto; ">


<div class="row">
    <div class="col-12" > 
    <img src="/users/${myThumb}" class="img-thumbnail" style="max-height:72px; margin:0; padding:0!important;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12" style="padding:0;">
      <div id="h" class="text-center" style="color: white;">${myName.substring(0,11)}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div id="particle-canvas${myId}" style="height:200px"></div>
  </div>
  
</article>`
);  
       
       
    }
    if (window.innerWidth >= 910) {
        $('#myBanner').append(`
<article id="articleBanner" class="col-7"  id-key="${myId}" name-key="${myName}" style="height:100%;   display: block; min-width:80px;
  margin-left: auto;
  margin-right: auto; ">


<div class="row">
    <div class="col-12 text-center" > 
    <img src="/users/${myThumb}" class="img-thumbnail" style="max-height:72px; padding:0!important; border-color: #141313;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12" style="padding:0;">
      <div id="h" class="text-center" style=" white-space: nowrap; color: white;">${myName.substring(0,11)}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div id="particle-canvas${myId}" style="height:200px"></div>
  </div>
  
</article>`
);
    }


    if (window.innerWidth < 910 && window.innerWidth > 766) {
        $('#myBanner').append(`
<article id="articleBanner" class="col-7"  id-key="${myId}" name-key="${myName}" style="height:100%;   display: block; min-width:80px;
  margin-left: auto;
  margin-right: auto; ">


<div class="row">
    <div class="col-12 text-center" > 
    <img src="/users/${myThumb}" class="img-thumbnail" style="max-height:72px; padding:0!important; border-color: #141313;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12" style="padding:0;">
      <div id="h" class="text-center" style="color: white;">${myName.substring(0,11)}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div id="particle-canvas${myId}" style="height:170px"></div>
  </div>
  
</article>`
);
    }




particleCanvas.length = 0;

insertBanner(myId,"/userFlag/"+myBanner,myBannerEffect);

$('#myBanner').on('click','article',function(){
  document.getElementById("articles").innerHTML = "";
  document.getElementById("articlesRequests").innerHTML = "";
        console.log("myBanner");//write here maybe the function to create an iframe video passing the video id.
        $('#articles').append(`
        
        <form id="avatarEditForm">
  <div class="form-group">
    <label for="exampleFormControlFile1" style="color:whitesmoke">Avatar</label>
    <br>
    <input  name="avatarEdit" style="color:whitesmoke;display:inline-block;width:-moz-max-content;width:fit-content;" type="file" class="form-control-file" id="avatarEdit"></input>
  </div>
  </form>

<div class="form-group">
    <label for="exampleFormControlSelect1" style="color:whitesmoke">Banner</label>
    <select class="form-control" id="bannerEdit" style="display:inline;">
      <option>Default</option>
      <option>Miss You</option>
      <option>Warrior</option>
      <option>2020</option>
      <option>AlexDjayk</option>
      <option>Smiley</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2" style="color:whitesmoke">Banner Effect</label>
    <select class="form-control" id="effectEdit" style="display:inline;">
      <option>none</option>
      <option>particles</option>
    </select>
  </div>

<form id="usernameEditForm"> 
<div style="margin-top: 100px;">
<label style="color:whitesmoke">Username</label>
<div class="input-group">
  <input type="text" style="  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;

  border-radius: 50px;" class="form-control" id="usernameEdit" placeholder="username">  
  <div class="input-group-append"style="position: absolute;
  right: 6px;
  top: 50%;
  transform: translateY(-50%);z-index:3;">
        <button class='btn btn-link search-btn'>
            <i class='fa fa-save'></i>
        </button>
  </div>
</div>
</div>
</form>


<form id="passwordEditForm" style="padding-bottom:20px;">   
<div style="margin-top: 10px;">
<label for="exampleFormControlInput1"style="color:whitesmoke">Password</label>
<div class="input-group">
  
  <input type="password" style="  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;

  border-radius: 50px;" class="form-control" id="passwordEdit" placeholder="password">  
  <div class="input-group-append"style="position: absolute;
  right: 6px;
  top: 50%;
  transform: translateY(-50%);z-index:3;">
        <button class='btn btn-link search-btn'>
            <i class='fa fa-save'></i>
        </button>
  </div>
</div>
</div>
</form>
        
        `);
        
        $('#usernameEditForm').submit(function(event){
    event.preventDefault();

var input= document.getElementById('usernameEdit').value;

if(input <12){
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/editProfile',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:"username",
                        content:input,
  
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                        console.log("success");
                    }
                }); 

              }else{
                console.log("Username needs to be 11 characters or less");
              }

document.getElementById('usernameEdit').value='';    

});


$('#passwordEditForm').submit(function(event){
    event.preventDefault();
 
var input= document.getElementById('passwordEdit').value;

if (input > 3){
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/editProfile',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:"password",
                        content:input,
  
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                        console.log("success");
                    }
                }); 

              }else{
                console.log("Password is 3 characters or less. Try again.")
              }
document.getElementById('passwordEdit').value='';    

});



$("#avatarEditForm").change(function(e){
  var fileInput = document.getElementById('avatarEdit');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        console.log('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{       
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/editProfileAvatar',
                    type: 'POST',
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    /* send the csrf-token and the input to the controller */
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                        console.log("success avatar upload");
                        refreshUserInfo();
                    }
                }); 
              }
        });

        $("#bannerEdit").change(function(){
            //alert($( "#bannerEdit option:selected" ).text());
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/editProfile',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:"banner",
                        content:$( "#bannerEdit option:selected" ).text(),
  
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg); 
                        console.log("success");
                        refreshUserInfo();
                        

                    }
                }); 
        
        });
        $("#effectEdit").change(function(){
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/editProfile',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:"effect",
                        content:$( "#effectEdit option:selected" ).text(),
  
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        //$(".writeinfo").append(data.msg);
                        console.log("success"); 
                        refreshUserInfo();

                    }
                }); 
        
        });

	    });



      
     
      
      

      if (window.innerWidth <= 766) {

       $("#inputId").attr("placeholder", "Search");
      
      
       
    }

 if (window.innerWidth <= 901 && window.innerWidth > 767 ) {
      
      $("#inputId").attr("placeholder", "");
    }
    if (window.innerWidth > 901) {
     
      $("#inputId").attr("placeholder", "Search");
    }





    if (window.innerWidth <= 899 && window.innerWidth > 767 ) {
 
       $("#communityMembersSearchRowId").css("display","none");
       $("#searchBoxMiddleId").css("display","flex");
       
    }

    if (window.innerWidth <= 766) {

      $("#communityMembersSearchRowId").css("display","flex");
      $("#searchBoxMiddleId").css("display","none");
    }


    if (window.innerWidth > 900) {
      

        $("#communityMembersSearchRowId").css("display","flex");
        $("#searchBoxMiddleId").css("display","none");
   }




}

function refreshBanner(){
  console.log("my banner is:" +myBanner);
  document.getElementById("myBanner").innerHTML = "";
                        if (window.innerWidth <= 766) {
    $('#myBanner').append(`
<article id="articleBanner" class="col-3"  id-key="${myId}" name-key="${myName}" style="height:100%;   display: block; min-width:80px;
  margin-left: auto;
  margin-right: auto; ">


<div class="row">
    <div class="col-12" > 
    <img src="/users/${myThumb}" class="img-thumbnail" style="max-height:72px; margin:0; padding:0!important;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12" style="padding:0;">
      <div id="h" class="text-center" style="color: white;">${myName.substring(0,11)}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div id="particle-canvas${myId}" style="height:200px"></div>
  </div>
  
</article>`
);  
       
       
    }
    if (window.innerWidth > 909) {
        $('#myBanner').append(`
<article id="articleBanner" class="col-7"  id-key="${myId}" name-key="${myName}" style="height:100%;   display: block; min-width:80px;
  margin-left: auto;
  margin-right: auto; ">


<div class="row">
    <div class="col-12 text-center" > 
    <img src="/users/${myThumb}" class="img-thumbnail" style="max-height:72px; padding:0!important; border-color: #141313;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12" style="padding:0;">
      <div id="h" class="text-center" style="color: white;">${myName.substring(0,11)}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div id="particle-canvas${myId}" style="height:200px"></div>
  </div>
  
</article>`
);
    }


    if (window.innerWidth < 910 && window.innerWidth > 766) {
        $('#myBanner').append(`
<article id="articleBanner" class="col-7"  id-key="${myId}" name-key="${myName}" style="height:100%;   display: block; min-width:80px;
  margin-left: auto;
  margin-right: auto; ">


<div class="row">
    <div class="col-12 text-center" > 
    <img src="/users/${myThumb}" class="img-thumbnail" style="max-height:72px; padding:0!important; border-color: #141313;background-color:#141313;position: relative;"></img>
    </div>
  </div>


  <div class="row">
    <div class="col-12" style="padding:0;">
      <div id="h" class="text-center" style="color: white;">${myName.substring(0,11)}</div>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <div class="text-center" style="color: #D9D8D8;" id="h"></div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
    <div id="particle-canvas${myId}" style="height:170px"></div>
  </div>
  
</article>`
);
    }




particleCanvas.length = 0;

insertBanner(myId,"/userFlag/"+myBanner,myBannerEffect);
}


</script>


<script>

Echo.private('notification.' + <?php echo auth()->user()->id; ?>)
                    .listen('NotificationEvent', (e) => {
                        console.log(e);
                        
                        if(e.notification.message==="new friend request"){
                        getPendingCounts();
                        }

                      
                    });



var myName;
var myThumb;
var myId;
var myBanner;
var myBannerEffect;



$(document).ready(function(){
    //getPendingCounts();
    axios.get(`/communityMembers/Auth/0`)
    .then(function (response) {
        // handle success
        //console.log(response.data.image)
        myName=response.data.name;
        myThumb=response.data.image;
        myId=response.data.id;
        myBanner=response.data.banner;
        myBannerEffect=response.data.banner_effect;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  
});
function refreshUserInfo(){
  axios.get(`/communityMembers/Auth/0`)
    .then(function (response) {
        // handle success
        //console.log(response.data.image)
        myName=response.data.name;
        myThumb=response.data.image;
        myId=response.data.id;
        myBanner=response.data.banner;
        myBannerEffect=response.data.banner_effect;
        refreshBanner();
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}

function searchUser(input){
    axios.get('/communityMembers/'+input)
    .then(function (response) {
        // handle success
        console.log(response.data);
        resultsLoop(response.data,input);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}


function resultsLoop(data,input){
    document.getElementById("articles").innerHTML = "";
    document.getElementById("articlesRequests").innerHTML = "";
	$.each(data, function(i){
        var thumb=data[i].image;
        var name= data[i].name;
        var id= data[i].id;
        
        axios.get('/communityMembers/friendship/'+id)
    .then(function (response) {
        // handle success
        console.log(response.data);
        var friendshipStatus;
        if(response.data=="ME"){
            friendshipStatus="Me :)";
        }else{
        if (response.data.isFriends ===true){
            friendshipStatus="Friends";
        }else{
            if(response.data.friendRequest===false & response.data.incomingRequest===false){
            
            friendshipStatus="Not Friends/Friend Request not sent"
            }else if(response.data.friendRequest===false & response.data.incomingRequest===true){
                friendshipStatus="Not Friends/Incoming Request"
            }else if(response.data.friendRequest===true & response.data.incomingRequest===false){
                friendshipStatus="Not Friends/Sent Request"
            }
        }
    }
        $('#articles').append(`
        <article class="item" data-key="${id}" keyword="${input}" style="border-radius:8px; padding:9px 12px; height:100%;" >
 <div class="row h-100 justify-content-center align-items-center" > 
    <div class="col-4">
    <div class="text-center">    
  <img src="/users/${thumb}" class="img-thumbnail" style="margin:0; padding:0!important; height:100%;"></img>
    </div>
    </div>
  <div class="col-8">
    
  <div class="details" style=" align-items: center;">
  <h5 style="font-size: 100%; padding:0;margin:0;font-weight:600; color:white;">${name}</h5>
  <p style="font-size: 50%; color:grey; font-weight:600; padding:0; margin:0;">${friendshipStatus}</p>
  </div>
       
  </div>  
  </div>
  <div style="width: 80%; padding-top: 5px; margin: 0 auto; border-bottom: 1px solid black;"></div>
  </article>
        
        `);

    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 

        
       
});
}








function checkFriendship(input){
    //input=4;
    axios.get('/communityMembers/friendship/'+input)
    .then(function (response) {
        // handle success
        console.log(response.data.isFriends);
        
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}

function incomingFriendRequestsLoop(data){
    document.getElementById("articlesRequests").innerHTML = "";
    document.getElementById("articles").innerHTML = "";
    $.each(data, function(i){

        var id= data[i].sender_id;
        console.log(id);

        axios.get('/communityMembers/searchUser/'+id)
    .then(function (response) {
        // handle success
        console.log(response.data);
        var thumb=response.data.image;
        var name= response.data.name;


        $('#articlesRequests').append(`
        <div class="item"  style="border-radius:8px; padding:1px 1px; height:100px;" >
<div class="text-center">    
  <img data-key="${id}" data-name="${name}" thumb-key="${thumb}" id="articlesImg" src="/users/${thumb}" class="img-thumbnail" style="margin:0; padding:0!important;margin:0; padding:0!important; position: relative; height:80%;"></img>
    <h6 small style="color:white;">${name}</h6>
   </div>
   </div>
        `);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 


    });

}



function newFriendChat(id,thumb,name){
    console.log("sending...")
    var notification="add new friend to chat"
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/chat/newFriend',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:notification,
                        to_id:id,
                        myIdis:myId,
                        thumb:myThumb,
                        name:myName,

                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
        }
        function newFriendChatMyself(id,thumb,name){
    console.log("sending...")
    var notification="add new friend to chat myself"
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/chat/newFriend',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:notification,
                        to_id:myId,
                        myIdis:id,
                        thumb:thumb,
                        name:name,

                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 
        }

function createConversation(contactid,contactname){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var contentConversation= "last message";
$.ajax({
  
                    /* the route pointing to the post function */
                    url: '/create/conversations',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        user_id:<?php echo auth()->id(); ?>,
                        contact_id:contactid,
                        last_message:"Me: "+contentConversation,
                        last_messageTheir:contactname+": "+contentConversation,
                        last_time: null,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        
                    }
                }); 

}



function getFriendRequestsNames(){
    axios.get('/communityMembers/pendingNames/0')
    .then(function (response) {
        // handle success
        console.log(response.data);
        incomingFriendRequestsLoop(response.data)
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}






        





function addFriend(id){
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/sendFriendRequest',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:id,
                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        console.log("Success");
                    }
                }); 




}


function getPendingCounts(){
    axios.get('/communityMembers/pendingCount/0')
    .then(function (response) {
        // handle success
        console.log(response.data);
        document.getElementById("friendrequests").innerHTML = "";
        $('#friendrequests').append(`
        <a onclick="getFriendRequestsNames();" class="btn btn-default"><i class="fa fa-user-plus"></i> &nbsp; ${response.data}</a>
        `);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}

function sendNotification(notification,id){
    
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/communityMembers/sendnotification',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        message:notification,
                        to_id:id,
                        
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                    }
                }); 

}

</script>


































































<script>


$( document ).ready(function() {
      friendList();//needs to be on screen first, before setStatus is ran.
      

 
});
function addEchoMessenger(){
     console.log("Adding Echo Messenger");
  Echo.join(`messenger`)
    .here((users) => {
      
        //console.log("online ",users);
        $.each(users, function(i){
          console.log("user online id: "+users[i].id)
          onlineArray.push(users[i].id);
          setStatus(users[i].id,"online");
        });
        
        //arrayStatus();
    })
    .joining((user) => {
        console.log(user.id);
        onlineArray.push(user.id);
        setStatus(user.id,"online");
    })
    .leaving((user) => {
        console.log(user.id);
        onlineArray.splice(onlineArray.indexOf(onlineArray.find(item => item.id == user.id)), 1);
        console.log(onlineArray)
        setStatus(user.id,"offline");
    })
    .error((error) => {
        console.error(error);
    });  

  }
</script>



<script>

function insertMessagefromPusher(content,thumb,name){
  
 
            $('#messages').append(`

            <div class="media">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0" style="font-weight: bold;font-size: 1.2rem;">${name}</h5>
    <p>${content}</p>
   
  </div>
</div>

        `);
        scrolltoBottom()
}
function insertMyMessage(content){
  
        $('#messages').append(`

        <div class="media">
  
  <div class="media-body">
    <h5 class="mt-0 mb-1" style="font-weight: bold;font-size: 1.2rem;">Me</h5>
    <p>${content}</p>
    </div>
    <img class=" ml-3 rounded-circle" src="/users/${myThumb}" style="width:64; height:64;" alt="">
  
</div>

        `);
        scrolltoBottom()
}

function scrolltoBottom(){
  
  $("#cardbody").scrollTop($("#cardbody")[0].scrollHeight);
  //console.log("zzzz");
  return false;

}
var onlineArray=[];
var listeningID;
var theirName;
var theirThumb;
var myName;
var myThumb;
var myId;
var conversationRecepientId;
var conversationRecepientName;



    $("#searchListInput").on("keyup", function() {
  var value = this.value.toLowerCase().trim();
 
  $("#friends li").show().filter(function() {
    return $(this).attr('name').toLowerCase().trim().indexOf(value) == -1;
  }).hide();
});



Echo.private('notification.' + <?php echo auth()->user()->id; ?>)
                    .listen('NotificationEvent', (e) => {
                        console.log(e);
                        
                        //if(e.notification.message==="new friend request"){
                        //getPendingCounts();
                        //}
                        if(e.notification.message==="add new friend to chat"){
                          console.log("got it!");
                          newFriendAcceptedRequestAddToChat(e.notification.name,e.notification.thumb,e.notification.myIdis);
                        }

                        if(e.notification.message==="add new friend to chat myself"){
                          console.log("got it, add to myself!");
                          //console.log(e.notification.name,e.notification.thumb,e.notification.myIdis);
                          newFriendAcceptedRequestAddToChat(e.notification.name,e.notification.thumb,e.notification.myIdis);
                        }
                      
                    });

Echo.private('users.'+ <?php echo auth()->id(); ?>)
    		    .listen('MessageSent', (data) => {
    		    	const message = data.message;
            	message.written_by_me = false;   
              console.log(data.message.from_id); 
              lastConversationsPOST(data.message.from_id);
              $("#"+data.message.from_id).prependTo("#friends");// SEND MESSAGE TO TOP
              $("#"+data.message.from_id).css('background-color', '#d6cdcb');
              if(listeningID == data.message.from_id){
                
              insertMessagefromPusher(data.message.content,theirThumb,theirName);
              
              }
    		    });



 


    
    function arrayStatus(){
//setStatus(onlineArray);
console.log("array "+onlineArray);
}
function setStatus(data,status){
  if(status=="offline"){

  $("#friends li[id="+data+"]").filter(function(){
  console.log($(this).attr('name'));
  $('#status', this).css('background-color', '717171');//GRAY COLOR
});
$("#friends li[id="+data+"]").appendTo("#friends");//MOVE IT TO LAST POSITION
}

if(status=="online"){

$("#friends li[id="+data+"]").filter(function(){
console.log($(this).attr('name'));
$('#status', this).css('background-color', '2AFF00');//GREEN COLOR
});
$("#friends li[id="+data+"]").prependTo("#friends");//MOVE IT TO FIRST POSITION
}

}

$('#inputForm').submit(function(event){
  
console.log("hello"+conversationRecepientId);
// prevent default browser behaviour
event.preventDefault();

//do stuff with your form here

var input= document.getElementById('chatInputId').value;

//console.log("enter or press"+ input);
document.getElementById('chatInputId').value='';


var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
                    /* the route pointing to the post function */
                    url: '/api/messages',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        to_id: conversationRecepientId,
                        content: input,
                        
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        console.log("success api/messages POST")
                        lastConversationsPOST(conversationRecepientId,input);  
                        insertMyMessage(input);
                        $("#"+conversationRecepientId).prependTo("#friends");
                    }
                }); 

                
                
});


function newFriendAcceptedRequestAddToChat(name,thumb,id){
  var lastimetextid="time"+id;
  var lastmessageid="lm"+id;

  var statusColor="717171";
        $.each(onlineArray, function(i){
            if(id==onlineArray[i]){
              console.log("online friend "+onlineArray[i]);
              statusColor="2AFF00";
            }
            
          });


  $('#friends').append(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:#1b2838">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 p-1" align-self="center" >
    
    <p class="mb-1">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;font-weight: 400;font-size: 0.75rem;">last message</p>
    </div>


    <div class="col-3 d-md-none d-lg-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null" style="font-size: 0.75rem;">last time</p>
    </div>
</div>
   </button>
</li>

        `);
        
}

function lastConversationEcho(){

}
function lastConversationsPOST(contactid,content){
  console.log("id passed POST "+contactid)
    
    axios.get('/api/conversations/'+contactid)
    .then(function (response) {
        // handle success
        if (!response.data || response.data.length == 0) {
          console.log("empty");

          
            
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
  
                    /* the route pointing to the post function */
                    url: '/create/conversations',
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {
                        _token: CSRF_TOKEN,
                        user_id:<?php echo auth()->id(); ?>,
                        contact_id:contactid,
                        last_message:"Me: "+content,
                        last_messageTheir:myName+": "+content,
                        last_time: null,
                       
                    },
                    //dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) { 
                        $(".writeinfo").append(data.msg); 
                        
                    }
                }); 

                lastConversations(contactid);
        }else{
        console.log("post last message"+response.data[0].last_time)
        var lastreceivedsentmessage=response.data[0].last_message.substring(0,15)
        var render=$("#time"+contactid).attr('render');
          console.log("SAdsdafsdafdsa"+render);
        if(render=="no"){
          console.log("inside render no");
          $("#time"+contactid).attr('class',"need_to_be_rendered text-muted small text-center");
          $("#time"+contactid).attr('render',"yes");
          $("#time"+contactid).attr('datetime',response.data[0].last_time);
         // timeago.cancel(document.querySelectorAll('.need_to_be_rendered'));

          $("#lm"+contactid).text(lastreceivedsentmessage);
        }else{
        $("#lm"+contactid).text(lastreceivedsentmessage);
        $("#time"+contactid).attr('datetime',response.data[0].last_time);

        }

        }
        return true;
    }).then(function (r){console.log(r);timeago.cancel();timeago.render(document.querySelectorAll('.need_to_be_rendered'));})
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}



function lastConversations(id){
  console.log("id passed "+id)
    
    axios.get('/api/conversations/'+id)
    .then(function (response) {
        // handle success
        if (!response.data || response.data.length == 0) {
          console.log("empty");
        }else{
          var lastreceivedsentmessage=response.data[0].last_message.substring(0,15)
        //console.log(response.data[0].last_message)
        $("#lm"+id).text(lastreceivedsentmessage);
        console.log("response.data[0].last_time" +response.data[0].last_time)
        if(response.data[0].last_time==null){
          $("#time"+id).attr('class',"text-muted small text-center");
          $("#time"+id).attr('render',"no");
        }else{
        $("#time"+id).attr('datetime',response.data[0].last_time);
        $("#time"+id).attr('render',"yes");
        }
        
        }
        return true;
    }).then(function (r){console.log(r);timeago.render(document.querySelectorAll('.need_to_be_rendered'));})
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}



  function getMessages(id,thumb,name){
 
    axios.get(`/api/messages?contact_id=${id}`)
    .then(function (response) {
        // handle success
        
        loadMessagesToContact(response.data,thumb,name)
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }





  function loadMessagesToContact(data,thumb,name){
      //console.log(data); console.log(thumb); console.log(name)
      console.log("data from api: "+data);
    document.getElementById("messages").innerHTML = "";
	$.each(data, function(i){
        
        var content=data[i].content;
        var me=data[i].written_by_me;
        if(me===true){
        $('#messages').append(`

        <div class="media">
  
  <div class="media-body">
    <h5 class="mt-0 mb-3" style="font-weight: bold;font-size: 1.2rem;">Me</h5>
    <p>${content}</p>
    </div>
    <img class=" ml-3 rounded-circle" src="/users/${myThumb}" style="width:64; height:64;" alt="">
  
</div>

        `);
        }else{
            $('#messages').append(`

            <div class="media">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0" style="font-weight: bold;font-size: 1.2rem;">${name}</h5>
    <p>${content}</p>
   
  </div>
</div>

        `);
        }
        
        
    });
    scrolltoBottom();//SCROLL TO THE BOTTOM AFTER GETTING MESSAGES

  }



  function friendList(){
    axios.get('/communityMembers/friendList/0')
    .then(function (response) {
        // handle success
        //console.log(response.data);
        var data=response.data;
        var count=response.data.length;
        var countAddedtoChat=0;
        console.log(count);
         $.each(data, function(i){
         
        var id= data[i].id;
        var lastimetextid="time"+data[i].id;
        var lastmessageid="lm"+data[i].id;

        
        var statusColor="717171";
        var online=false;
        $.each(onlineArray, function(i){
            if(id==onlineArray[i]){
              console.log("online friends "+onlineArray[i]);
              statusColor="2AFF00";
              online=true;
            }else{
              online=false;
            }
            
          });
         //console.log(lastmessageid);
if(online==false){
        axios.get('/communityMembers/searchUser/'+id)
    .then(function (response) {
        // handle success
        //console.log(response.data);
        var thumb=response.data.image;
        var name= response.data.name.substring(0,11);

               $('#friends').append(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:#1b2838">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 p-1" align-self="center" >
    
    <p class="mb-1" style="white-space: nowrap;color:#fff;font-weight: 400;font-size: 0.75rem;">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;font-size: 0.8rem;">last message</p>
    </div>


    <div class="col-3 d-md-none d-lg-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null" style="font-size: 0.75rem;">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    }).then(function () {console.log("inserted li");lastConversations(id);countAddedtoChat=countAddedtoChat+1;
      if(countAddedtoChat==count){
        addEchoMessenger();
    }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }else{
    axios.get('/communityMembers/searchUser/'+id)
    .then(function (response) {
        // handle success
        //console.log(response.data);
        var thumb=response.data.image;
        var name= response.data.name.substring(0,11);

               $('#friends').prepend(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:#1b2838">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 p-1" align-self="center" >
    
    <p class="mb-1" style="white-space: nowrap;color:#fff";font-weight: 400;font-size: 0.75rem;>
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;font-size: 0.8rem;">last message</p>
    </div>


    <div class="col-3 d-md-none d-lg-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null" style="font-size: 0.75rem;">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    }).then(function () {console.log("inserted li");lastConversations(id);countAddedtoChat=countAddedtoChat+1;
      if(countAddedtoChat==count){
        addEchoMessenger();
    }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }
    

    });
    

    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
}

$('#friends').on('click','li',function(){
        listeningID=$(this).attr('id');
		    id= $(this).attr('id');
        thumb=$(this).attr('thumb');
        name=$(this).attr('name');
        theirName=$(this).attr('name');
        theirThumb=$(this).attr('thumb');
        conversationRecepientId=$(this).attr('id');
        conversationRecepientName=$(this).attr('name');
        getMessages(id,thumb,name);
        $("#"+id).css('background-color', '#1b2838');
		$('body').toggleClass('nav-open');
        
        //console.log("their id = "+id);//write here maybe the function to create an iframe video passing the video id.
       
	    });

</script>











<!-- SIDE BAR CHAT----------->
<style>

body.nav-open {
  overflow: hidden;
}

#ocn {
  background: #F0F8FF;
  bottom: 0;
  overflow-y: auto;
  position: fixed;
  left: -320px;
  top: 0;
  width: 320px;
  -webkit-transition: all 300ms;
  transition: all 300ms;
  z-index: 9990;
}

.nav-open #ocn {
  -webkit-transform: translateX(320px);
  transform: translateX(320px);
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
































<script>

// particle.min.js hosted on GitHub
// Scroll down for initialisation code

!function(a){var b="object"==typeof self&&self.self===self&&self||"object"==typeof global&&global.global===global&&global;"function"==typeof define&&define.amd?define(["exports"],function(c){b.ParticleNetwork=a(b,c)}):"object"==typeof module&&module.exports?module.exports=a(b,{}):b.ParticleNetwork=a(b,{})}(function(a,b){var c=function(a){this.canvas=a.canvas,this.g=a.g,this.particleColor=a.options.particleColor,this.x=Math.random()*this.canvas.width,this.y=Math.random()*this.canvas.height,this.velocity={x:(Math.random()-.5)*a.options.velocity,y:(Math.random()-.5)*a.options.velocity}};return c.prototype.update=function(){(this.x>this.canvas.width+20||this.x<-20)&&(this.velocity.x=-this.velocity.x),(this.y>this.canvas.height+20||this.y<-20)&&(this.velocity.y=-this.velocity.y),this.x+=this.velocity.x,this.y+=this.velocity.y},c.prototype.h=function(){this.g.beginPath(),this.g.fillStyle=this.particleColor,this.g.globalAlpha=.7,this.g.arc(this.x,this.y,1.5,0,2*Math.PI),this.g.fill()},b=function(a,b){this.i=a,this.i.size={width:this.i.offsetWidth,height:this.i.offsetHeight},b=void 0!==b?b:{},this.options={particleColor:void 0!==b.particleColor?b.particleColor:"#fff",background:void 0!==b.background?b.background:"#1a252f",interactive:void 0!==b.interactive?b.interactive:!0,velocity:this.setVelocity(b.speed),density:this.j(b.density)},this.init()},b.prototype.init=function(){if(this.k=document.createElement("div"),this.i.appendChild(this.k),this.l(this.k,{position:"absolute",top:0,left:0,bottom:0,right:0,"z-index":1}),/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.background))this.l(this.k,{background:this.options.background});else{if(!/\.(gif|jpg|jpeg|tiff|png)$/i.test(this.options.background))return console.error("Please specify a valid background image or hexadecimal color"),!1;this.l(this.k,{background:'url("'+this.options.background+'") no-repeat center',"background-size":"cover"})}if(!/(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(this.options.particleColor))return console.error("Please specify a valid particleColor hexadecimal color"),!1;this.canvas=document.createElement("canvas"),this.i.appendChild(this.canvas),this.g=this.canvas.getContext("2d"),this.canvas.width=this.i.size.width,this.canvas.height=this.i.size.height,this.l(this.i,{position:"relative"}),this.l(this.canvas,{"z-index":"20",position:"relative"}),window.addEventListener("resize",function(){return this.i.offsetWidth===this.i.size.width&&this.i.offsetHeight===this.i.size.height?!1:(this.canvas.width=this.i.size.width=this.i.offsetWidth,this.canvas.height=this.i.size.height=this.i.offsetHeight,clearTimeout(this.m),void(this.m=setTimeout(function(){this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&this.o.push(this.p),requestAnimationFrame(this.update.bind(this))}.bind(this),500)))}.bind(this)),this.o=[];for(var a=0;a<this.canvas.width*this.canvas.height/this.options.density;a++)this.o.push(new c(this));this.options.interactive&&(this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p),this.canvas.addEventListener("mousemove",function(a){this.p.x=a.clientX-this.canvas.offsetLeft,this.p.y=a.clientY-this.canvas.offsetTop}.bind(this)),this.canvas.addEventListener("mouseup",function(a){this.p.velocity={x:(Math.random()-.5)*this.options.velocity,y:(Math.random()-.5)*this.options.velocity},this.p=new c(this),this.p.velocity={x:0,y:0},this.o.push(this.p)}.bind(this))),requestAnimationFrame(this.update.bind(this))},b.prototype.update=function(){this.g.clearRect(0,0,this.canvas.width,this.canvas.height),this.g.globalAlpha=1;for(var a=0;a<this.o.length;a++){this.o[a].update(),this.o[a].h();for(var b=this.o.length-1;b>a;b--){var c=Math.sqrt(Math.pow(this.o[a].x-this.o[b].x,2)+Math.pow(this.o[a].y-this.o[b].y,2));c>120||(this.g.beginPath(),this.g.strokeStyle=this.options.particleColor,this.g.globalAlpha=(120-c)/120,this.g.lineWidth=.7,this.g.moveTo(this.o[a].x,this.o[a].y),this.g.lineTo(this.o[b].x,this.o[b].y),this.g.stroke())}}0!==this.options.velocity&&requestAnimationFrame(this.update.bind(this))},b.prototype.setVelocity=function(a){return"fast"===a?1:"slow"===a?.33:"none"===a?0:.66},b.prototype.j=function(a){return"high"===a?2e3:"low"===a?2e4:isNaN(parseInt(a,10))?1e4:a},b.prototype.l=function(a,b){for(var c in b)a.style[c]=b[c]},b});

// Initialisation
var particleCanvas=[];
function insertBanner(id,userFlag,effect){
  
  
  if(effect=="none"){
const canvasCreate= document.createElement('canvas');
const divCreate= document.createElement('div');
var canvasDiv = document.getElementById('particle-canvas'+id);

canvasCreate.setAttribute("id", "canvasElement"+id);
canvasCreate.setAttribute("class","allCanvasNoEffect");

canvasCreate.style.position= "relative";
canvasCreate.style.zIndex= "20";
canvasCreate.style.height='100%';
canvasCreate.style.width='100%';

divCreate.style.background = 'url("'+userFlag+'")';
divCreate.style.backgroundPosition="center";
divCreate.style.backgroundSize="cover";
divCreate.style.backgroundRepeat="no-repeat";
divCreate.style.top= "0px";
divCreate.style.left= "0px";
divCreate.style.bottom= "0px";
divCreate.style.right= "0px";



divCreate.style.inset= "0px";
divCreate.style.zIndex= "1";
divCreate.style.position="absolute"
canvasDiv.style.position="relative";
canvasDiv.appendChild(divCreate);   
canvasDiv.appendChild(canvasCreate);   



}
  
  if(effect=="particles"){
var canvasDiv = document.getElementById('particle-canvas'+id);
var options = {
  particleColor: '#0083FF',
  background: userFlag,
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
  #myChat{
   
     overflow:hidden;
     
}
#myChat:hover { 
     overflow-y:scroll; 
    
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
  #articlesGroup{
   
     overflow:hidden;
     
}
#articlesGroup:hover { 
     overflow-y:scroll; 
    
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
  #category{
   
     overflow:hidden;
     
}
#category:hover { 
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
.testimonial-group > .row > .col-6 {
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
    //addRooms(room);
    //insertBanner(1,"/banners/defaultBanner.jpg","particles");
});




function createForm(){
   
    
    document.getElementById("roomList").innerHTML = "";
    $('#roomList').append(` 

    <form style="margin: auto;">
    <div class="form-group">
    <label for="categories" style="color:gray">Select Category</label>
    <select multiple class="form-control" id="categories" data-max-options="1" onchange="catgetval(this);" name="categoriesname">
      <option>anime</option>
      <option>games</option>
      <option>comedy</option>
      <option>music</option>
      <option>other</option>
    </select>
    <a onclick="createRoom();" class="btn btn-default" style="color:white"><i class="fa fa-star"></i> &nbsp; Go</a>
    
  </div>
</form>
    
 
    
    `);
}




function addRooms(data){
    document.getElementById("roomList").innerHTML = "";
    


    if ($(window).width() <= 900) {
      $.each(data, function(i){
        console.log(data[i]);
        var thumb=data[i].userThumb;
        var banner="/userFlag/"+data[i].userBanner;
        var effect=data[i].userBanner_effect;
        var id=data[i].id;
        var name=data[i].name.substring(0,7);
        var videoType=data[i].videoType;
        //var category=data[i].category;
       


        $('#roomList').append(`


<article class="articleRoom col-3"  id-key="${id}" name-key="${name}" videoType-key="${videoType}" style="height: max-content; min-width:80px; ">


    
<div class="row">
    <div class="col-12" >
    <img src="/users/${thumb}" class="img-thumbnail" style="max-height:72px; margin:0; padding:0!important;border-color: #141313;background-color:#141313;position: relative;"></img>
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
    <div class="particlesdiv" id="particle-canvas${id}" style="height:170px"></div>
  </div>
  
</article>
        `);

        insertBanner(id,banner,effect);

    });
    }
    if ($(window).width() >= 900) {
      $.each(data, function(i){
        console.log(data[i]);
        var thumb=data[i].userThumb;
        var banner="/userFlag/"+data[i].userBanner;
        var effect=data[i].userBanner_effect;
        var id=data[i].id;
        var name=data[i].name.substring(0,7);
        var videoType=data[i].videoType;
        //var category=data[i].category;
       


        $('#roomList').append(`


<article class="articleRoom col-2"  id-key="${id}" name-key="${name}" videoType-key="${videoType}" style="height: max-content; min-width:80px; ">


    
<div class="row">
    <div class="col-12" >
    <img src="/users/${thumb}" class="img-thumbnail" style="max-height:72px; margin:0; padding:0!important;border-color: #141313;background-color:#141313;position: relative;"></img>
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
    <div class="particlesdiv" id="particle-canvas${id}" style="height:260px"></div>
  </div>
  
</article>
        `);

        insertBanner(id,banner,effect);

    });
    }
    
}
//RESIZE PARTICLES DIV BY WINDOW SIZE
$(window).resize(function() {         
    if ($(window).width() <= 900) {
       $(".particlesdiv").css("height","170px");
       //$("#particle-canvas"+myId).css("height","170px");
       
  
    }
    if ($(window).width() <= 766) {
      
       
       $(".articleRoom").removeClass("col-2").addClass("col-3");
       $("#articleBanner").removeClass("col-7").addClass("col-3");
       $("#roomList").css("max-height","320px");
    }
    if ($(window).width() >= 767) {
      
        $(".articleRoom").removeClass("col-3").addClass("col-2");
        $("#articleBanner").removeClass("col-3").addClass("col-7");
        $("#roomList").css("max-height","500px");
   }
    if ($(window).width() >= 900) {
       $(".particlesdiv").css("height","260px");
      
    }
    });

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


function searchRooms(input){
    axios.get('/roomInfo/searchRooms/'+input)
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

function catgetval(sel)
{

  
    //alert(sel.selectedIndex);
    $("select[name=categoriesname] option[value="+sel.value+"]").attr('selected','selected');
    //$("#categories").val(sel.value).change();
}


function createRoom(){
var e = document.getElementById("categories");
var category = e.value;
var lengthCategory= $('#categories :selected').length;
if(lengthCategory >1){
  
  console.log("Select One");
        console.log("runAlertCode = "+runAlertCode)
        if(runAlertCode==true){
          runAlertCode=false;
          $('#messageAlert').text("One (1) category only");
  $('.alert').addClass("show");
  $('.alert').removeClass("hide");
  $('.alert').addClass("showAlert");
  //add false to prevent alert code from running
  var alertcodeTimeout = setTimeout(function(){
    runAlertCode=true;
    $('.alert').removeClass("show");
    $('.alert').addClass("hide");
    //add true to show alert again
  },5000);

$('.close-btn').click(function(){
  $('.alert').removeClass("show");
  $('.alert').addClass("hide");
  clearTimeout(alertcodeTimeout);//clears the function out of var timeout to reset timer.
  runAlertCode=true;
  //add true to show alert again
});
}
}else{
//console.log(user.name);
//alert(myBanner);
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
                        userThumbSend:myThumb,
                        userBannerSend:myBanner,
                        userBannerEffectSend:myBannerEffect,
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
}
                
                
            
</script>

<style>
/* The heart of the matter */
.testimonial-group > .row {
  display: block;
  overflow-x: auto;
  overflow-y: hidden;
  white-space: nowrap;
}
.testimonial-group > .row > .col-2{
  display: inline-block;
}

article:hover {
		border: 2px solid #313F50;
	}
</style>


<!-- ALERT MESSAGE -->

<script>
$(document).ready(function(){
  if ($(window).width() <= 766) {
      
       

      $(".alert").css("width","95%");
      //$(".alert .msg").css("font-size","15px");
   }
   if ($(window).width() >= 767) {
     
       $(".alert").css("width","");
       //$(".alert .msg").css("font-size","18px");
       
  }
});
$(window).resize(function() {         
 



    if ($(window).width() <= 766) {
      
       

       $(".alert").css("width","95%");
       //$(".alert .msg").css("font-size","15px");
    }
    if ($(window).width() >= 767) {
      
        $(".alert").css("width","");
        //$(".alert .msg").css("font-size","18px");
   }
 
    });

</script>
<style>
.alert{
  background: #181E26;
  padding: 20px 40px;
  min-width: 380px;
  max-width: 480px;
  position: absolute;
  right: 0;
  top: 10px;
  border-radius: 4px;
  border-left: 8px solid #313F50;
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
  
}
.alert.showAlert{
  opacity: 1;
  pointer-events: auto;
}
.alert.show{
  animation: show_slide 1s ease forwards;
}
@keyframes show_slide {
  0%{
    transform: translateX(100%);
  }
  40%{
    transform: translateX(-10%);
  }
  80%{
    transform: translateX(0%);
  }
  100%{
    transform: translateX(-10px);
  }
}
.alert.hide{
  animation: hide_slide 1s ease forwards;
}
@keyframes hide_slide {
  0%{
    transform: translateX(-10px);
  }
  40%{
    transform: translateX(0%);
  }
  80%{
    transform: translateX(-10%);
  }
  100%{
    transform: translateX(100%);
  }
}
.alert .fa-exclamation-circle{
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: whitesmoke;
  font-size: 30px;
}
.alert .msg{
  padding: 0 20px;
  font-size: 18px;
  color: gray;
}
.alert .close-btn{
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  background: #313F50;
  padding: 20px 18px;
  cursor: pointer;
}
.alert .close-btn:hover{
  background: #3a4b5f;
}
.alert .close-btn .fas{
  color: #ce8500;
  font-size: 22px;
  line-height: 40px;
}
</style>

@endsection
