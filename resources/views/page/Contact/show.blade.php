@extends('backend.layout.main')

@section('title', 'Contact Details')

@section('content')

<div class="container mt-4">

    <!-- PAGE HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Contact Message</h2>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <!-- CONTACT DETAILS CARD -->
    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>Rahul Sharma</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>rahul@example.com</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>9876543210</td>
                </tr>
                <tr>
                    <th>Message</th>
                    <td>Need help with my order</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge bg-warning">Pending</span>
                    </td>
                </tr>
                <tr>
                    <th>Received At</th>
                    <td>29 Aug 2026, 11:45 AM</td>
                </tr>
            </table>

            <!-- ACTION BUTTONS -->
            <div class="mt-3">
                <button type="button" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Delete
                </button>

                <button type="button" class="btn btn-success">
                    <i class="fas fa-check"></i> Mark Resolved
                </button>
            </div>

        </div>
    </div>

</div>

@endsection
