@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="btn-group" role="group" aria-label="Add">
                    <!-- Add Company Button -->
                    <a href="{{ route('companies.create') }}" class="btn btn-primary">{{ __('Add Company') }}</a>

                    <!-- Add Employee Button -->
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">{{ __('Add Employee') }}</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="app">
                    <employees-table></employees-table>
                </div>
            </div>
        </div>
    </div>
@endsection
