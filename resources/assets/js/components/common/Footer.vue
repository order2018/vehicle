<template>
    <div class="footer">
        <mt-tabbar v-model="selected" fixed>

            <mt-tab-item id="1">
                <div @click="go('/')">
                    <div class="mint-tab-item-icon">
                        <i slot="icon" class="iconfont icon-sousuo"></i>
                        <!--<img slot="icon" src="">-->
                    </div>
                    <div class="mint-tab-item-label">
                        查违章
                    </div>
                </div>
            </mt-tab-item>

            <mt-tab-item id="2">
                <div @click="go('/order/index')">
                    <div class="mint-tab-item-icon">
                        <i slot="icon" class="iconfont icon-changyonggoupiaorenbianji"></i>
                    </div>
                    <div class="mint-tab-item-label">
                        订单
                    </div>
                </div>
            </mt-tab-item>

            <mt-tab-item id="3">
                <div @click="go('/user/index')">
                    <div class="mint-tab-item-icon">
                        <i slot="icon" class="iconfont icon-wode"></i>
                    </div>
                    <div class="mint-tab-item-label">
                        我的
                    </div>
                </div>
            </mt-tab-item>

        </mt-tabbar>
    </div>
</template>

<script>
    export default {
        name: 'Footer',
        props: {
            select:String,
        },
        data() {
            return {
                selected:this.select ? this.select : '1'
            };
        },
        methods: {
            go (path) {
                return this.$router.push({path:path});
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
    .footer{
        height:80px;
    }
    .iconfont {
        font-size: 23px;
    }
    .mint-tabbar{
        background-color: #004098;
        color:#fff;
    }
    .mint-tabbar.is-fixed {
        z-index: 9999;
    }
    .mint-tabbar > .mint-tab-item.is-selected {
        background-color: transparent;
        color: #878a7f;
    }
</style>
