<template>
    <div class="menu">
        <Swipe></Swipe>
        <mt-cell title="查询范围"></mt-cell>
        <div class="weui-grids">
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="">
                </div>
                <p class="weui-grid__label">违章查询</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="">
                </div>
                <p class="weui-grid__label">违章代办</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="">
                </div>
                <p class="weui-grid__label">车牌号校验</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="">
                </div>
                <p class="weui-grid__label">今日油价</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="">
                </div>
                <p class="weui-grid__label">车牌识别</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="">
                </div>
                <p class="weui-grid__label">驾驶证查询</p>
            </a>
        </div>
        <mt-cell title="记录列表"></mt-cell>
    </div>
</template>

<script>
    import Swipe from './Swipe'
    export default {
        name: 'Menu',
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
        components:{
            Swipe
        }
    }
</script>

<style scoped>
    .weui-grids {
        position: relative;
        overflow: hidden;
    }

    .weui-grids:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        height: 1px;
        color: #D9D9D9;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scaleY(0.5);
        transform: scaleY(0.5);
    }

    .weui-grids:after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 1px;
        bottom: 0;
        color: #D9D9D9;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scaleX(0.5);
        transform: scaleX(0.5);
    }

    .weui-grid {
        position: relative;
        float: left;
        padding: 20px 10px;
        width: 33%;
        box-sizing: border-box;
    }

    .weui-grid:before {
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        width: 1px;
        bottom: 0;
        color: #D9D9D9;
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0;
        -webkit-transform: scaleX(0.5);
        transform: scaleX(0.5);
    }

    .weui-grid:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        color: #D9D9D9;
        -webkit-transform-origin: 0 100%;
        transform-origin: 0 100%;
        -webkit-transform: scaleY(0.5);
        transform: scaleY(0.5);
    }

    .weui-grid__icon {
        width: 80px;
        height: 80px;
        margin: 0 auto;
    }

    .weui-grid__icon img {
        display: block;
        width: 100%;
        height: 100%;
    }

    .weui-grid__icon + .weui-grid__label {
        margin-top: 5px;
    }

    .weui-grid__label {
        display: block;
        text-align: center;
        color: #000000;
        font-size: 14px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
</style>
