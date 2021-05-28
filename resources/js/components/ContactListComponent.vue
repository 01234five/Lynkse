<template>

<div>

<contact-component 
            v-for="conversation in conversationsFiltered"
            :key="conversation.id"
            :conversation="conversation"
            :selected="isSelected(conversation)"
            @click.native="selectConversation(conversation)">      
    
</contact-component>
</div>
<!--        
<contact-component variant="dark">
</contact-component>
<contact-component variant="light">
</contact-component>
<contact-component variant="secondary">
</contact-component>
-->




<!--
<b-sidebar id="sidebar-1" title="Chat" shadow>
<active-conversation-component></active-conversation-component>
</b-sidebar>
-->


</template>

<script>
    export default {


        methods:{



             isSelected(conversation) {
                if (this.selectedConversation)
                    return this.selectedConversation.id === conversation.id;

                return false;
            },
        
        selectConversation(conversation) {
                //this.$router.push(`/chat/${conversation.id}`, () => {
                    this.$store.dispatch('getMessages', conversation);
               // });
            },

        },

            computed:{
            selectedConversation() {
                return this.$store.state.selectedConversation;
            },
                        conversationsFiltered() {
                return this.$store.getters.conversationsFiltered;
            },
            }

        }
    
    
</script>
