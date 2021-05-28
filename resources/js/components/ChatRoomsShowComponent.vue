<template>
<!--
<b-container fluid class="" style="height: calc(100vh - 104px);">
<b-row align-h="end" class="h-100">        
<b-col cols="2"> -->
<div style="height: calc(100vh - 120px);box-sizing: border-box;">
<b-card no-body footer-bg-variant="white" footer-border-variant="Secondary" style="height: calc(100vh - 120px);box-sizing: border-box;border-color: #313F50;"> <!-- header-bg-variant="white" header-border-variant="Light"> -->


<b-card-body class="card-body-scroll" style="background-color:#1b2838">
    
<chat-room-message-component v-for="message in roommessages" 
:key="message.id"
:written-by-me="message.written_by_me"
:name="message.user.name"
:image="message.user.image"
>
    {{message.body}}
</chat-room-message-component>
</b-card-body>

     <div >
        <b-form class="my-1 mx-1"  autocomplete="off" @submit.prevent="postMessage">
         <b-input-group>
             <b-form-input class="text-center"
                type="text"
                v-model="newMessage"
                placeholder="Send Text">
            </b-form-input>
          <b-input-group-append>
              <b-button  type="submit" variant="white" class="btn btn-outline-secondary" >Send</b-button>
          </b-input-group-append>
          </b-input-group>
    </b-form>
                </div>
                </b-card>

</div>
</template>

<script>

    export default {
        props: ['currentroom','messages','user'],
        data(){
            return{
            users: [],
            newMessage:'', //Variable to input message using v model
            roommessages:[],
            Id:''
            };
        },
         methods: {
            connect() {
                console.log("launched")
                Echo.join(`chat.${this.currentroom.id}`)
                .here((users) => {
                  
                    })
                    .joining((user) => {
                       console.log(user);
                    })
                    .leaving((user) => {
                        console.log(user.name);
                    })
                    .listen('NewChatMessageEvent', (e) => {
                        //const message= e.message;
                        //message.written_by_me = (e.user.id==message.user_id);
                        //message.user.name=e.user.name;
                        console.log(e);
                        let messagecomposition={
                            body:e.message.body,
                            id:e.message.id,
                            created_at:e.message.created_at,
                            room_id:e.message.room_id,
                            updated_at:e.message.updated_at,
                            
    
                            user:e.user,
                            user_id: e.message.user_id
                        }
                        const message=messagecomposition;
                       // console.log(e.user.id)
                        //console.log(message.user_id)
                        message.written_by_me = (this.user.id==message.user_id);
                        this.roommessages.push(message);
                        //console.log(e.user, e.message.body);
                        //let newMessage = {
                        //    body: e.message.body,
                        //    user: e.user
                        // }
                        //this.messages.push(newMessage)
                        //console.log(this.roommessages)
                        //this.scrollToBottom()
                    })
            },
   
            getMessage(){
             axios.get('/api/roommessages/'+this.currentroom.slug)
             .then((response)=>{
                 //console.log(response.data);
                 this.roommessages = response.data
                 //console.log(this.roommessages)
                 }); 
            },
            postMessage() {
                const params= {
                    room_id:this.currentroom.id,
                    body: this.newMessage
                }
                axios.post('/api/roommessages',params)
                .then((response) => {
                if(response.data.success){
                //console.log(response.data)
                
                this.getMessage();
                    }
                });
                this.newMessage= '';
            },
                        scrollToBottom() {
               const el= document.querySelector('.card-body-scroll');
               el.scrollTop = el.scrollHeight;
            }, 
         },

         mounted(){
             this.connect()
             this.getMessage();
         },

         updated(){
                this.scrollToBottom()
            },
        computed:{
            myImageUrl(){
            return `/users/${this.message.image}`;
            },
        }
      
    }
</script>
