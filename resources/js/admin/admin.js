import Vue from 'vue'
import Axios from 'axios'

import VueSimpleAlert from "vue-simple-alert"
import VModal from 'vue-js-modal'

import App from './App'
import router from './router'
import i18n from './locales'
import store from './store'

import base from './configs/base'

Vue.use(VModal, { dynamic: true, dynamicDefaults: { height: 'auto' } });
Vue.use(VueSimpleAlert);

Vue.configs = Object.assign({}, base);
Vue.config.productionTip = false;

Axios.defaults.baseURL = Vue.configs.baseURL + Vue.configs.api
Axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
Axios.defaults.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('access_token');
Axios.defaults.headers.common['Content-Type'] = 'application/json';
Axios.defaults.headers.common['Content-Language'] = i18n.locale;

Vue.prototype.$http = Axios;

// Events
const eventHub = new Vue();
Vue.prototype.$eventHub = eventHub;

// sockets
window.io = require('socket.io-client');
window.socket = io.connect(Vue.configs.socketsBaseURL);

// custom
// creates a fast copy of any object
window.copy = (object) => {
    return JSON.parse(JSON.stringify(object));
}

// capitalizes any string ( only first letter )
window.capitalize = (s) => {
    let string = s.slice();
    if (typeof string !== 'string') return ''
    return string.charAt(0).toUpperCase() + string.slice(1)
}

// returns you an object without a key  ( deletes a key from an object )
window.objectWithoutKey = (object, key) => {
    const {
        [key]: deletedKey, ...otherKeys
    } = object;
    return otherKeys;
}

// turns string date into date value for an input type date
Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0, 10);
});

new Vue({
    render: h => h(App),
    i18n,
    router,
    store
}).$mount('#app')