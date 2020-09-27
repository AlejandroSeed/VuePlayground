import Vue from 'vue';
window.axios = require('axios');
import vuetify from '../components/vuetify';

import RegisterForm from './RegisterForm';

new Vue({
    el: '#root',
    vuetify,
    render: h => h(RegisterForm)
});
