
<template>
<component :is="componentName2" :rooms="rooms"></component>
</template>

<script>

export default {
    props:
    ['rooms'],
data() {
    return {
      componentName1: 'chat-room-show-component',
      componentName2: 'chat-room-index-component'
    }
  }


}

</script>
