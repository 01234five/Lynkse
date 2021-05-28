<template>
<b-media v-if="writtenByMe" right-align class="mb-2" style="">     
    <b-row >
    <b-col cols="12" class="text-right p-1 text-white" >
    {{name}}
    <b-img :src="url+image" class="mb-2" rounded="circle"  width="30" height="30" ></b-img>
    </b-col>
    </b-row>
    <b-card no-body class="" style="background-color:#313F50;">
    <div class="" style="color:#a3a3a3">
      <slot></slot>
    </div>
    </b-card>
    </b-media>

<b-media v-else vertical-align="center" class="mb-2">
    <b-row >
    <b-col cols="12" class="text-left p-1 text-white" >
        <b-img :src="url+image" class="mb-2" rounded="circle"  width="30" height="30" ></b-img>
    {{name}}
    </b-col>
    </b-row>
    <b-card no-body style="background-color:#313F50;">
    <div class="" style="color:#a3a3a3" >
      <slot></slot>
    </div>
    </b-card>
</b-media>

 
</template>

<script>

    export default {
        props: {
            writtenByMe : Boolean,
            name: String,
            image: String
            
        },
            data(){
                return{
                    url:"/users/",
                    content: 'Miss you a lot, please ... dont leave me alone....'
                };
            },
            mounted(){
                
            },
    }
</script>