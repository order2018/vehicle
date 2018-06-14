<template>
    <div class="home">
        <v-header></v-header>
        <Swipe></Swipe>
        <v-menu></v-menu>

        <a class="mint-cell">
            <div class="mint-cell-left"></div>
            <div class="mint-cell-wrapper" style="padding: 0 10px 0 0;text-indent: 10px;">
                <div class="mint-cell-title">
                    <span class="mint-cell-text">违章资讯</span>
                </div>
                <div class="mint-cell-value">
                    <span>更多</span>
                </div>
            </div>
            <div class="mint-cell-right"></div>
        </a>

        <a class="mint-cell" style="min-height: 60px">
            <div class="mint-cell-left"></div>
            <div class="mint-cell-wrapper" style="padding: 0 10px 0 0;text-indent: 10px;">
                <img src="" width="50" height="36">
                <div class="mint-cell-title">
                    <span class="mint-cell-text" style="margin-left: 10px;">粤SZ***159的交通违章信息详情</span>
                    <span class="mint-cell-label" style="margin-left: 10px;">广东深圳 观澜大道竹村机荷桥底-观澜大道竹村</span>
                </div>
            </div>
            <div class="mint-cell-right"></div>
        </a>
        <a class="mint-cell" style="min-height: 60px">
            <div class="mint-cell-left"></div>
            <div class="mint-cell-wrapper" style="padding: 0 10px 0 0;text-indent: 10px;">
                <img src="" width="50" height="36">
                <div class="mint-cell-title">
                    <span class="mint-cell-text" style="margin-left: 10px;">粤LV***17T的交通违章信息详情</span>
                    <span class="mint-cell-label" style="margin-left: 10px;">广东惠州 秋长-坑梓16公里700米的</span>
                </div>
            </div>
            <div class="mint-cell-right"></div>
        </a>
        <a class="mint-cell" style="min-height: 60px">
            <div class="mint-cell-left"></div>
            <div class="mint-cell-wrapper" style="padding: 0 10px 0 0;text-indent: 10px;">
                <img src="" width="50" height="36">
                <div class="mint-cell-title">
                    <span class="mint-cell-text" style="margin-left: 10px;">粤LV***17T的交通违章信息详情</span>
                    <span class="mint-cell-label" style="margin-left: 10px;">广东惠州 秋长-坑梓16公里700米的</span>
                </div>
            </div>
            <div class="mint-cell-right"></div>
        </a>
        <a class="mint-cell" style="min-height: 60px">
            <div class="mint-cell-left"></div>
            <div class="mint-cell-wrapper" style="padding: 0 10px 0 0;text-indent: 10px;">
                <img src="" width="50" height="36">
                <div class="mint-cell-title">
                    <span class="mint-cell-text" style="margin-left: 10px;">粤LV***17T的交通违章信息详情</span>
                    <span class="mint-cell-label" style="margin-left: 10px;">广东惠州 秋长-坑梓16公里700米的</span>
                </div>
            </div>
            <div class="mint-cell-right"></div>
        </a>
        <a class="mint-cell" style="min-height: 60px">
            <div class="mint-cell-left"></div>
            <div class="mint-cell-wrapper" style="padding: 0 10px 0 0;text-indent: 10px;">
                <img src="" width="50" height="36">
                <div class="mint-cell-title">
                    <span class="mint-cell-text" style="margin-left: 10px;">粤LV***17T的交通违章信息详情</span>
                    <span class="mint-cell-label" style="margin-left: 10px;">广东惠州 秋长-坑梓16公里700米的</span>
                </div>
            </div>
            <div class="mint-cell-right"></div>
        </a>


        <v-footer></v-footer>
    </div>
</template>

<script>
    import Header from './common/Header'
    import Swipe from './common/Swipe'
    import Menu from './common/Menu'
    import Footer from './common/Footer'
    export default {
        name:'Home',
        data() {
            return {

            };
        },
        components:{
            'v-header':Header,
            Swipe,
            'v-menu':Menu,
            'v-footer':Footer
        }
    }
</script>

<style scoped>

</style>
