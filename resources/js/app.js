require('./bootstrap');
import Vue from 'vue'
import Vuex from 'vuex'
import storeVuex from './store/index'
import filter from './filter'
import VueChatScroll from 'vue-chat-scroll';

Vue.use(Vuex)
Vue.use(VueChatScroll);
window.Vue = require('vue').default;

const store = new Vuex.Store(storeVuex)


Vue.component('main-app', require('./components/MainApp.vue').default);

//window.moment = require('moment');

const app = new Vue({
    el: '#app',
    store
});
