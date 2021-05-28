<template>
<!--<b-col cols="2" class="p-1"> -->


<div>

      <b-media :right-align="writtenByMe" vertical-align="">
      <template #aside>
        <b-img :src="image" rounded="circle" width="64" height="64" ></b-img>
      </template>
      <h5 v-if="writtenByMe" class="mt-0">Me</h5>
      <h5 v-if="!writtenByMe" class="mt-0">{{this.contactName}}</h5>
      <p>
          <slot></slot>
      </p>
    </b-media>
</div>


<!--</b-col> -->
</template>

<script>
    export default {
        props:{
        writtenByMe:Boolean,
        contactName: String,
        userName: String,
        image:String,
        },

        data(){
            return{
                content:'abc'
                
            };
        },

        mounted() {
            console.log('Written by me=', this.writtenByMe)
        }
    }
</script>
