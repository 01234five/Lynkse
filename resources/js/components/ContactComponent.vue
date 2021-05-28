<template>

    
    <b-list-group-item :variant="variant" class="p-0 btn-outline-white">
    <b-button v-b-toggle.sidebar-1 variant="light" class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
        <b-row class="p-2" align-h="center">

<b-row class="p-1">
    <b-col cols="12" md="3" class="text-center" align-self="center">
    
    <b-img :src="conversation.contact_image" rounded="circle" width="50" height="50"  class="m1"></b-img>
    
    </b-col>
</b-row>
    <b-col cols="5" align-self="center" class="d-none d-md-block p-1">
    
   

    <p class="mb-1">
        <status-component :online="conversation.online"></status-component>
        {{conversation.contact_name}}</p>
    <p class="text-muted small mb-1">{{conversation.last_message}}</p>
    </b-col>
    <b-col cols="3" class="d-none d-xl-block p-1">
    <p class="text-muted small">{{lastTime}}</p>
    </b-col>
</b-row>
   </b-button>
</b-list-group-item>
</template>

<script>
    export default {
        props:{
            conversation: Object,
            selected: Boolean
        },
        data(){
            return{
  
            };
        },

        mounted() {
           
        },
        computed:{
            lastTime(){
                return moment(this.conversation.last_time, "YYYY-MM-DDThh:mm:ssssssZ").fromNow();
            },                                                               
            variant(){
                return this.selected ? 'info' : '';
            }
        }
    }
</script>
