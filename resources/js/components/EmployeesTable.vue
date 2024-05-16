<template>
  <div>
    <table id="employees-table" class="table">
      <thead>
      <tr>
        <th>Employee Name</th>
        <th>Employee Email</th>
        <th>Phone</th>
        <th>Company Name</th>
        <th>Logo</th>
        <th>Website</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="employee in employees" :key="employee.id">
        <td>{{ employee.first_name }} {{ employee.last_name }}</td>
        <td>{{ employee.email }}</td>
        <td>{{ employee.phone }}</td>
        <td>{{ employee.company_data.name }}</td>
        <td>
          <img :src="`/storage/${employee.company_data.logo}`" alt="Company Logo" width="50">
        </td>
        <td>{{ employee.company_data.website }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      employees: []
    };
  },
  mounted() {
    this.fetchEmployees();
  },
  methods: {
    async fetchEmployees() {
      try {
        const response = await axios.get('employee-list');
        this.employees = response.data;
        console.log("this.employees",this.employees)
      } catch (error) {
        console.error('Error fetching employees:', error);
      }
    }

  }
};
</script>
