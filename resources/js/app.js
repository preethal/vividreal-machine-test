require('./bootstrap');
// resources/js/app.js

import Vue from 'vue';
import AddEmployeeForm from './components/AddEmployeeForm.vue';

Vue.component('add-employee-form', AddEmployeeForm);

const app = new Vue({
    el: '#app'
});
