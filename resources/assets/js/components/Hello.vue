<template>
    <div>
        <h1>Begin from this page!</h1>
        <p>Vue Version:{{ msg }}</p>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                'msg' : Vue.version
            }
        },
        components: {}
    }
</script>

<style>
</style>