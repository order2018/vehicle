<template>
    <div class="header">
        <header class="mint-header is-fixed">
            <h1 class="mint-header-title">{{ title }}</h1>
        </header>
    </div>
</template>

<script>
    export default {
        name: 'Header',
        data() {
            return {
                title:'交警车务'
            };
        },
        methods: {
            go (path) {
                return this.$router.push({path:path});
            }
        }
    }
</script>

<style scoped>
.header{
    height: 40px;
}
.mint-header{
    background-color: #004098;
}
</style>
