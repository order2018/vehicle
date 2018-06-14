<template>
    <div class="menu">
        <div class="weui-grids">
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="http://admin.vehicle.pw/uploads/icon/w01.png">
                </div>
                <p class="weui-grid__label">违章查询</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="http://admin.vehicle.pw/uploads/icon/w02.png">
                </div>
                <p class="weui-grid__label">违章代办</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="http://admin.vehicle.pw/uploads/icon/w04.png">
                </div>
                <p class="weui-grid__label">车牌识别</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="http://admin.vehicle.pw/uploads/icon/w03.png">
                </div>
                <p class="weui-grid__label">今日油价</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="http://admin.vehicle.pw/uploads/icon/w05.png">
                </div>
                <p class="weui-grid__label">驾驶证查询</p>
            </a>
            <a href="javascript:;" class="weui-grid">
                <div class="weui-grid__icon">
                    <img slot="icon" src="http://admin.vehicle.pw/uploads/icon/w06.png">
                </div>
                <p class="weui-grid__label">智能问答</p>
            </a>
        </div>
    </div>
</template>

<script>
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

        }
    }
</script>

<style scoped>
    .menu{
        background-color: #fff;
        margin-bottom:10px;
    }
    .weui-grids {
        position: relative;
        overflow: hidden;
    }
    .weui-grids:before {
        content: " ";
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        height: 1px;
        border-top: 1px solid #D9D9D9;
        color: #D9D9D9;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scaleY(0.5);
        transform: scaleY(0.5);
    }
    .weui-grids:after {
        content: " ";
        position: absolute;
        left: 0;
        top: 0;
        width: 1px;
        bottom: 0;
        border-left: 1px solid #D9D9D9;
        color: #D9D9D9;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-transform: scaleX(0.5);
        transform: scaleX(0.5);
    }
    .weui-grid {
        position: relative;
        float: left;
        padding: 36px 10px;
        width: 33.33%;
        box-sizing: border-box;
    }
    .weui-grid:before {
        content: " ";
        position: absolute;
        right: 0;
        top: 0;
        width: 1px;
        bottom: 0;
        border-right: 1px solid #D9D9D9;
        color: #D9D9D9;
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0;
        -webkit-transform: scaleX(0.5);
        transform: scaleX(0.5);
    }
    .weui-grid:after {
        content: " ";
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        height: 1px;
        border-bottom: 1px solid #D9D9D9;
        color: #D9D9D9;
        -webkit-transform-origin: 0 100%;
        transform-origin: 0 100%;
        -webkit-transform: scaleY(0.5);
        transform: scaleY(0.5);
    }
    .weui-grid__icon {
        width: 46px;
        height: 46px;
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
