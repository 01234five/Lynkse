<template>
<!--<b-col cols="2" class="p-1"> -->

<b-card no-body footer-bg-variant="white" footer-border-variant="Secondary" class="h-100"> <!-- header-bg-variant="white" header-border-variant="Light"> -->


<b-card-body class="card-body-scroll">

    <message-conversation-component 
    v-for="message in messages" :key="message.id" :written-by-me="message.written_by_me" :contact-name="selectedConversation.contact_name" 
    :image="message.written_by_me ? myImage : selectedConversation.contact_image">                                        
      {{message.content}}
    </message-conversation-component>
</b-card-body>




<!-- <div slot="header">
     <b-form class="my-1 mx-1">
        
          <b-input-group-append>
              <b-button variant="dark" class="btn btn-outline-white p-1">Back</b-button>
          </b-input-group-append>
          
    </b-form>
</div> -->

<div slot="footer">
     <b-form class="my-1 mx-1" @submit.prevent="postMessage" autocomplete="off">
         <b-input-group>
             <b-form-input class="text-center"
                type="text"
                v-model="newMessage"
                placeholder="Send Text">
            </b-form-input>
          <b-input-group-append>
              <b-button type="submit" variant="white" class="btn btn-outline-secondary">Send</b-button>
          </b-input-group-append>
          </b-input-group>
    </b-form>
</div>
</b-card>

<!--</b-col> -->
</template>


<style>
.card-body-scroll{
    overflow-y: auto;
}
</style>

<script>

    export default {
        props:{
            
            contactName: String,
            contactImage: String,
            
            
        },
        data(){
            return{
                newMessage:''
            };
        },

        mounted() {
           
        },

        methods:{


            postMessage(){
                this.$store.dispatch('postMessage', this.newMessage)
                .then(()=>{
                    this.newMessage = '';
                });
            },
            scrollToBottom() {
               const el= document.querySelector('.card-body-scroll');
               el.scrollTop = el.scrollHeight;
            }, 
        }, 
        computed:{
            selectedConversation() {
                return this.$store.state.selectedConversation;
            },
            messages(){
            return this.$store.state.messages;
            },
            myImage() {
                return `/users/${this.$store.state.user.image}`
            },
        },
        updated(){
                this.scrollToBottom()
            }

    }
</script>
