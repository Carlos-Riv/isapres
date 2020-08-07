/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// slideshow
// require('./front/partials/slideshow');

// moreClients section
require('./front/partials/moreClients');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// forms modal
Vue.component('extendform-component', require('./front/components/ExtendForm.vue').default);
// others
Vue.component('topslideshow-component', require('./front/components/Topslideshow.vue').default);
Vue.component('how-component', require('./front/components/How.vue').default);
Vue.component('aboutus-component', require('./front/components/Aboutus.vue').default);
Vue.component('header-component', require('./front/components/Header.vue').default);

const extendform = document.querySelector('#c__extendform');
const topslideshow = document.querySelector('#c__topslideshow');
const how = document.querySelector('#c__how');
const aboutus = document.querySelector('#c__aboutus');
const header = document.querySelector('.c__header');

if (topslideshow) {
    new Vue({
        el: topslideshow,
    });
}

if (how) {
    new Vue({
        el: how
    });
}

if (aboutus) {
    new Vue({
        el: aboutus
    });
}

if(header) {
    new Vue({
        el: header
    });
}

if(extendform) {
    new Vue({
        el: extendform
    });
}

// icons feather
const feather = require('feather-icons');
feather.replace();

// toastr
toastr = require('toastr');