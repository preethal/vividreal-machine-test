<!-- resources/js/components/AddEmployeeForm.vue -->

<template>
    <form @submit.prevent="submitForm">
        <input type="text" v-model="firstName" placeholder="First Name" required>
        <input type="text" v-model="lastName" placeholder="Last Name" required>
        <!-- Add more fields as needed -->
        <button type="submit">Submit</button>
    </form>
</template>

<script>
export default {
    data() {
        return {
            firstName: '',
            lastName: ''
            // Add more data properties for other fields
        };
    },
    methods: {
        submitForm() {
            // Submit form data here
        }
    }
};
</script>
