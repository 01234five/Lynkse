<template>
<div>
            <contact-form-component> 
            </contact-form-component>
            <contact-list-component>    
            </contact-list-component>
	        
            
<b-sidebar id="sidebar-1" title="Chat" shadow>
	         <active-conversation-component 
             v-if="selectedConversation"
             >

             </active-conversation-component>
</b-sidebar>



</div>
</template>

<script>
	export default {
		props: {
			user: Object
            
		},

        mounted() {
            this.$store.commit('setUser', this.user);
            this.$store.dispatch('getConversations');

            
               
                //this.$store.dispatch('getMessages', conversation);
            


                Echo.private(`users.${this.user.id}`)
    		    .listen('MessageSent', (data) => {
    		    	const message = data.message;
            		message.written_by_me = false;        
    	    		this.addMessage(message);
    		    });


            Echo.join('messenger')
                .here(
                    users => users.forEach(
                        user => this.changeStatus(user, true)
                    )
                )
                .joining(
                    user => this.changeStatus(user, true)
                )
                .leaving(
                    user => this.changeStatus(user, false)  
                );
        
        },
        methods: {
            changeStatus(user, status) {
                const index = this.$store.state.conversations.findIndex(
                    conversation => conversation.contact_id == user.id
                );
                if (index >= 0)
                    this.$set(this.$store.state.conversations[index], 'online', status);
            },
		addMessage(message){
            this.$store.commit('addMessage',message);
		}
        },
        computed: {
            selectedConversation(){
                return this.$store.state.selectedConversation;
            },


     
        }
    }
</script>