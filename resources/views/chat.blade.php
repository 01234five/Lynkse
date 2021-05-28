@extends('layouts.videoapp')

@section('content')


<!--<messenger-component :user="{{ auth()->user() }}" ></messenger-component> -->


<div  class="container-fluid" style="height: calc(100vh - 104px);">
<div class="row h-100">
<div id="myChat" class="col-2 p-1" style="height: calc(100vh - 104px); overflow-x:hidden;">

<input type="text" id="searchListInput" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="border-radius:0px 0px 0px 0px;">

<div id="friends"></div>
</div>
</div>
</div>

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

  <form id="inputForm">
  <div class="input-group mb-0">
  <input id="chatInputId" type="text" class="form-control" placeholder="send text" aria-label="send text" aria-describedby="basic-addon2" >
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Button</button>
  </div>
</div>
</form>

  </div>
</div>



    </div>
  </div>
  
  <div class="need_to_be_rendered" datetime="2021-05-09 22:11:21"></div>
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
<button type="submit"onclick="arrayStatus();">TEST</button>






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

<script>

function insertMessagefromPusher(content,thumb,name){
  
 
            $('#messages').append(`

            <div class="media">
  <img class="align-self-start mr-3 rounded-circle" src="/users/${thumb}" style="width:64; height:64;" alt="">
  <div class="media-body">
    <h5 class="mt-0">${name}</h5>
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
    <h5 class="mt-0 mb-1">Me</h5>
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
$(document).ready(function(){
  
    //friendList();
    axios.get(`/communityMembers/Auth/0`)
    .then(function (response) {
        // handle success
        //console.log(response.data.image)
        myName=response.data.name;
        myThumb=response.data.image;
        myId=response.data.id;
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 



    

});


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



    Echo.join(`messenger`)
    .here((users) => {
        //console.log("online ",users);
        $.each(users, function(i){
          //console.log("user online id: "+users[i].id)
          onlineArray.push(users[i].id);
          
        });
        friendList();
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
                        
                    }
                }); 

                lastConversationsPOST(conversationRecepientId,input);  
                insertMyMessage(input);
                $("#"+conversationRecepientId).prependTo("#friends");
                
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
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 d-none d-md-block p-1" align-self="center" >
    
    <p class="mb-1">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
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
          timeago.cancel();
          timeago.render(document.querySelectorAll('.need_to_be_rendered'));
          $("#lm"+contactid).text(lastreceivedsentmessage);
        }else{
        $("#lm"+contactid).text(lastreceivedsentmessage);
        $("#time"+contactid).attr('datetime',response.data[0].last_time);
        timeago.cancel();
        timeago.render(document.querySelectorAll('.need_to_be_rendered'));
        }

        }
    })
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
        timeago.render(document.querySelectorAll('.need_to_be_rendered'));
        }
    })
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
    
    document.getElementById("messages").innerHTML = "";
	$.each(data, function(i){
        
        var content=data[i].content;
        var me=data[i].written_by_me;
        if(me===true){
        $('#messages').append(`

        <div class="media">
  
  <div class="media-body">
    <h5 class="mt-0 mb-1">Me</h5>
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
    <h5 class="mt-0">${name}</h5>
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
        var name= response.data.name.substring(0,7);

               $('#friends').append(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:white">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 d-none d-md-block p-1" align-self="center" >
    
    <p class="mb-1">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
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
        var name= response.data.name.substring(0,7);

               $('#friends').prepend(`
    
               <li variant="info" class="list-group-item p-1 list-group-item-action" name="${name}" thumb="${thumb}" id="${id}" style="background-color:white">
<button  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
 <div class="row p-2" align-h="center">

<div class="row p-1">
    <div class="col-12 col-md-3 text-center"   align-self="center">
    
    <img src="/users/${thumb}" class="rounded-circle" style="width:50; height:50;"  ></img>
    
    </div>
</div>
    <div class="col-5 d-none d-md-block p-1" align-self="center" >
    
    <p class="mb-1">
    <img id="status" class="rounded-circle" style="width:10; height:10; background-color: #${statusColor};"  ></img>
       ${name}</p>


    <p id="${lastmessageid}" class="text-muted small mb-1" style="word-break: break-all;">last message</p>
    </div>


    <div class="col-3 d-none d-xl-block p-1" >
    
    <p  class="need_to_be_rendered text-muted small text-center" id="${lastimetextid}" render="no" datetime="null">last time</p>
    </div>
</div>
   </button>
</li>

        `);
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    }); 
  }
    lastConversations(id)

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
        $("#"+id).css('background-color', 'white');
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

@endsection
