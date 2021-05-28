/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


//require('./bootstrap');


//import * as mdb from 'mdb-ui-kit'; // lib
//import { Input } from 'mdb-ui-kit'; // module


import Vue from 'vue'
import Vuex from 'vuex'
import store from './store'
import VueRouter from 'vue-router'
import MessengerComponent from './components/MessengerComponent.vue'
Vue.use(Vuex);
Vue.use(VueRouter);





import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('contact-form-component', require('./components/ContactFormComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('contact-list-component', require('./components/ContactListComponent.vue').default);
Vue.component('active-conversation-component', require('./components/ActiveConversationComponent.vue').default);
Vue.component('side-bar-component', require('./components/SideBar.vue').default);
Vue.component('message-conversation-component', require('./components/MessageConversationComponent.vue').default);
//Vue.component('messenger-component', require('./components/MessengerComponent.vue').default);
Vue.component('status-component', require('./components/StatusComponent.vue').default);
Vue.component('profile-form-component', require('./components/ProfileFormComponent.vue').default);
Vue.component('chat-room-index-component', require('./components/ChatRoomsIndexComponent.vue').default);
Vue.component('green-button-component', require('./components/Buttons/GreenButtonComponent.vue').default);
Vue.component('chat-room-show-component', require('./components/ChatRoomsShowComponent.vue').default);
Vue.component('chat-room-main-component', require('./components/ChatRoomsMainComponent.vue').default);
Vue.component('chat-room-message-component', require('./components/ChatRoomsMessageComponent.vue').default);
Vue.component('video-screen-component', require('./components/VideoScreenComponent.vue').default);
Vue.component('friends-component', require('./components/FriendsComponent.vue').default);
Vue.component('friends-list-component', require('./components/FriendsListComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 
 const routes = [
  { path: '/chat', component: MessengerComponent },
  { path: '/chat/:conversationId', component: MessengerComponent },
];

const router= new VueRouter({
  routes,
  mode: 'history',
});
 

  const app = new Vue({
    el: '#app',
    store,
    router,
    methods: {
    	logout() {
    		document.getElementById('logout-form').submit();
    	}
    }
});






