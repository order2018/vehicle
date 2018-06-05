<template>
    <div class="swipe">

        <mt-swipe class="mt-swipe" :auto="4000" :show-indicators="false">
            <mt-swipe-item>
                <img class="mt-swipe-img" src="http://7xrxc6.com1.z0.glb.clouddn.com/wzcx.jpg" />
            </mt-swipe-item>
            <mt-swipe-item>
                <img class="mt-swipe-img" src="http://7xrxc6.com1.z0.glb.clouddn.com/wzcx.jpg" />
            </mt-swipe-item>
            <mt-swipe-item>
                <img class="mt-swipe-img" src="http://7xrxc6.com1.z0.glb.clouddn.com/wzcx.jpg" />
            </mt-swipe-item>
        </mt-swipe>

    </div>
</template>

<script>
    export default {
        name: 'Swipe',
        data() {
            return {

            };
        },
        methods: {
            go (path) {
                return this.$router.push({path:path});
            }
        },
        components:{

        }
    }
</script>

<style scoped>
    .mt-swipe {
        height:150px;
    }
    .mt-swipe-img {
        width:100%;
        height:150px;
    }
</style>
