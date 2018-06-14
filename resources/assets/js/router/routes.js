import VueRouter from 'vue-router';

let routes = [

    {
   		path: '/',
   		component: require('../components/Home')
	},
    {
        path: '/user/index',
        component: require('../components/user/Index')
    },
    {
        path: '/order/index',
        component: require('../components/order/Index')
    }

];

export default new VueRouter({
    	mode: 'history',
    	routes
})