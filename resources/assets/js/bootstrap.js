
window._ = require('lodash');

window.$ = window.jQuery = require('jquery');

window.axios = require('axios');
require('bootstrap-sass');



window.Vue = require('vue');
require('vue-resource');


window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
};