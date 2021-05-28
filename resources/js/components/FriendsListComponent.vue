<template>

  <b-list-group-item variant="info" class="p-0 btn-outline-white" id="friends">
    <b-button v-on:click="friendList"  class="p-0 list-group-item-action bg-transparent btn" style="background-color:transparent" >
        <b-row class="p-2" align-h="center">

<b-row class="p-1">
    <b-col cols="12" md="3" class="text-center" align-self="center">
    
    <b-img src="" rounded="circle" width="50" height="50"  class="m1"></b-img>
    
    </b-col>
</b-row>
    <b-col cols="5" align-self="center" class="d-none d-md-block p-1">
    
   

    <p class="mb-1">
      
        name</p>
    <p class="text-muted small mb-1">last message</p>
    </b-col>
    <b-col cols="3" class="d-none d-xl-block p-1">
    <p class="text-muted small">last time</p>
    </b-col>
</b-row>
   </b-button>
</b-list-group-item>
    
 
</template>


<script>
    export default {
        props:{
            
        },
        data(){
            return{
                ToDoItems: []
            };
        },
                computed:{
                                                                    
            variant(){
                return this.selected ? 'info' : '';
            }
        },

        mounted() {
           
        },
        methods: {
   
    
 }
}
</script>
