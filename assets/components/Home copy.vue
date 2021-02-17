<template>
<div>
    <p>{{message}}</p>
</div>
</template>

<script>
export default {
    name: 'Home',
    data(){
        return {
            message: 'Je suis un paragraphe'
        }
    },

    mounted(){
        console.log('test');
        this.test();
    },

    methods: {
        test(){
            this.message = 'Je suis un nouveau paragraphe'
        }
    },

}
</script>

<style>

</style>


