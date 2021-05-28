<template>
	<b-img rounded="circle" blank width="10" height="10" alt="Status"
		:title="online ? 'Connected' : 'Discconected'"
		:blank-color="online ? 'green' : 'gray'" />
</template>

<script>
	export default {
        props: {
            online: Boolean
        }
    }
</script>