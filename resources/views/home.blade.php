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
                <table id="companies-table" class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Logo</th>
                        <th>Website</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
<script>
    $(function() {
        $('#companies-table').DataTable({
            processing: true,
            serverSide: true,
            columns: [
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'logo', name: 'logo' },
                { data: 'website', name: 'website' }
            ]
        });
    });
</script>s
@endsection
