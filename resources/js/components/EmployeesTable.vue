<template>
  <div>
    <table id="employees-table" class="table">
      <thead>
      <tr>
        <th>Employee Name</th>
        <th>Employee Email</th>
        <th>Company Name</th>
        <th>Logo</th>
        <th>Website</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="employee in employees" :key="employee.id">
        <td>{{ employee.first_name }} {{ employee.last_name }}</td>
        <td>{{ employee.email }}</td>
        <td>{{ employee.companyData.name }}</td>
        <td>
          <img :src="employee.companyData.logo" alt="Company Logo" width="50">
        </td>
        <td>{{ employee.companyData.website }}</td>
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
    // async fetchEmployees() {
    //   try {
    //     const response = await axios.get('/api/employees');
    //     this.employees = response.data;
    //   } catch (error) {
    //     console.error('Error fetching employees:', error);
    //   }
    // }
    async fetchEmployees() {
      try {
        const response = await axios.get('/api/employees');
        this.employees = response.data;
      } catch (error) {
        console.error('Error fetching employees:', error);
      }
    }

  }
};
</script>
