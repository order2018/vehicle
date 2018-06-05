<template>
    <div class="home">
        <v-menu></v-menu>
        <v-footer></v-footer>
    </div>
</template>

<script>
    import Menu from './common/Menu'
    import Footer from './common/Footer'
    export default {
        name:'Home',
        data() {
            return {

            };
        },
        components:{
            'v-menu':Menu,
            'v-footer':Footer
        }
    }
</script>

<style scoped>

</style>
