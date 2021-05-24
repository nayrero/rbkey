/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
 //import RecallsComponent from './components/RecallsComponent.vue';
require('./bootstrap');
require('./index');


window.Vue = require('vue').default;
//import Vue from 'vue'
//import VueRouter from 'vue-router'
//Vue.use(VueRouter)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
//import MyComponent from './components/RecallsComponent.vue'

//Vue.component('recalls-component', require('./components/RecallsComponent.vue').default);
Vue.component('aboutslider-component', require('./components/AboutSliderComponent.vue').default);
Vue.component('servicesitem-component', require('./components/ServicesItemComponent.vue').default);
//Vue.component('order-component', require('./components/OrderComponent.vue').default);
Vue.component('index-component', require('./components/IndexComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 //Vue.component('recalls-component', () => import('./componetns/RecallsComponent.vue'));
 //Vue.component('aboutslider-component', () => import('./componetns/AboutSliderComponent.vue'));



//const Home = () => import(/* webpackChunkName: "home" */ './components/RecallsComponent.vue');
//const About = () => import(/* webpackChunkName: "about" */ './components/AboutSliderComponent.vue');


/*const routes = [
  { path: '/', name: 'home', component: Home },
  { path: '/about', name: 'about', component: About }
];
const router = new VueRouter({
    routes // сокращённая запись для `routes: routes`
  })
const app = new Vue({
    router
  }).$mount('#app')
*/
const app = new Vue({
    el: '#app',  
});
/*const recalls_app = new Vue({
  el: '#recalls-app',  
});*/
/*const recalls_comp_app = new Vue({
    el: '#recalls-slider',  
});
const about_slider_comp_app = new Vue({
    el: '#about',    
});*/
