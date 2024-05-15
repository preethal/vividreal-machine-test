require('./bootstrap');
import Vue from 'vue';

// Import the EmployeesTable component using the @ alias
import EmployeesTable from './components/EmployeesTable';

// Register the EmployeesTable component globally
Vue.component('employees-table', EmployeesTable);

// Create the Vue instance
new Vue({
    el: '#app',
});
