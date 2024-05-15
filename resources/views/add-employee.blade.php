<!-- resources/views/add-employee.blade.php -->

@extends('layouts.app')

@section('content')
    <div id="app">
        <add-employee-form></add-employee-form>
    </div>

    <!-- Include Vue and compiled Vue components -->
    <script src="{{ mix('js/app.js') }}"></script>
