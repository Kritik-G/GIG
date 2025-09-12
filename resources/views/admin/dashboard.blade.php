@extends('admin.layouts.app')

@section('title', 'GIG Admin Dashboard')

@section('content')
    <div class="container">
        <h1 class="h3 fw-bold mb-4">GIG Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 fw-bold">e-HAZIR Users</h2>
                        <p class="text-muted">Manage schools and students using e-HAZIR.</p>
                        <a href="#" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 fw-bold">Attendance Analytics</h2>
                        <p class="text-muted">View attendance trends and reports.</p>
                        <a href="#" class="btn btn-primary btn-sm">View Reports</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 fw-bold">System Settings</h2>
                        <p class="text-muted">Configure e-HAZIR settings.</p>
                        <a href="#" class="btn btn-primary btn-sm">Manage Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
