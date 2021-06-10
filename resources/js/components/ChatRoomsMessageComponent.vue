<template>
<b-media v-if="writtenByMe && this.width >952" right-align class="mb-2" style="">     
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

<b-media v-else-if="writtenByMe==false && this.width >952" vertical-align="center" class="mb-2">
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


<b-media v-else-if="this.width <= 952 && this.width > 767 && this.expanded==false" right-align class="mb-2" style="">     
    <b-row >
    <b-col cols="12" class="text-center p-1 text-white" >
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
    




<b-media v-else-if="writtenByMe && this.width <= 952 && this.width > 767 && this.expanded==true" right-align class="mb-2" style="">     
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

<b-media v-else-if="writtenByMe==false && this.width <= 952 && this.width > 767 && this.expanded==true" vertical-align="center" class="mb-2">
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








    <b-media v-else-if="writtenByMe && this.width <=767" right-align class="mb-2" style="">     
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

<b-media v-else-if="writtenByMe==false && this.width <=767" vertical-align="center" class="mb-2">
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
            expanded : Boolean,
            writtenByMe : Boolean,
            name: String,
            image: String
            
        },
            data(){
                return{
                    url:"/users/",
                    content: 'Miss you a lot, please ... dont leave me alone....',
                    width: window.innerWidth,
                     
                };
            },
            mounted(){
                this.width = window.innerWidth
                //console.log(this.width)
            },
            created() {
  window.addEventListener("resize", this.myEventHandler);
},
destroyed() {
  window.removeEventListener("resize", this.myEventHandler);
},
methods: {
  myEventHandler(e) {
    // your code for handling resize...
    this.width = window.innerWidth;
  }
},

    }
</script>