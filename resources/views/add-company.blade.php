@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add Employee') }}</div>

                    <div class="card-body">
<form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="logo">Logo (minimum 100x100)</label>
        <input type="file" class="form-control-file" id="logo" name="logo" accept="image/*">
    </div>

    <div class="form-group">
        <label for="website">Website</label>
        <input type="text" class="form-control" id="website" name="website">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
