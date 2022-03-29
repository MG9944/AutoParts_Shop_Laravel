/**
 * We will first load all the JavaScript dependencies of this project, which
 * includes Vue and other libraries. This is a great starting point when
 * building robust, powerful web applications using Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
  * The following code block can be used to automatically register 
 * Vue components. It will recursively scan this directory for Vue components
 * Vue and will automatically register them with their "basename".
 *
 * For example: ./components/ExampleComponent.vue -> <example-component></example-component>.
 */

// const files = require.context('./', true, //.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * We will then create a fresh instance of the Vue application and attach it to the
 * page. Then, you can start adding components to this application
 * or customize the JavaScript scaffolding to suit your needs.
 */

const app = new Vue({
    el: '#app',
});
