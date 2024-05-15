// require('./bootstrap');
// import Vue from 'vue';
//
// // Import the EmployeesTable component using the @ alias
// import EmployeesTable from './components/EmployeesTable';
//
// // Register the EmployeesTable component globally
// Vue.component('employees-table', EmployeesTable);
//
// // Create the Vue instance
// new Vue({
//     el: '#app',
// });
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('employees-table', require('./components/EmployeesTable').default);

const app = new Vue({
    el: '#app',
});

