<template>
<div>
    <b-button  @click="visit">
        
    </b-button>
</div>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'button',
            },
            href: {}, change: Boolean,
            rooms:{type:Object}
        },
        methods: {
            visit() {
 
                 console.log("test"); 
                return route('chat-rooms.show', this.rooms.slug);
               
            }
        }
    }
</script>
