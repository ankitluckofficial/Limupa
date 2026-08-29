@extends('backend.layout.main')

@section('title', 'Contact Messages')

@section('content')

    <div class="banner-page">

        <div class="banner-container">

            <!-- PAGE HEADER -->
            <div class="page-title">
                <div>
                    <h2>Contact Management</h2>
                    <p>View and manage all customer queries</p>
                </div>
            </div>

            <!-- TABLE CARD -->
            <div class="banner-card">

                <div class="card-header">
                    <div>
                        <h3>
                            <i class="fas fa-envelope"></i>
                            All Contact Messages
                        </h3>
                        <span>Customer feedback and queries</span>
                    </div>
                </div>

                <div class="table-wrapper">

                    <table class="banner-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            {{-- DEMO CONTACT DATA --}}
                            @php
                                $contacts = [
                                    [
                                        'name' => 'Rahul Sharma',
                                        'email' => 'rahul@example.com',
                                        'phone' => '9876543210',
                                        'message' => 'Need help with my order',
                                        'status' => 'Pending',
                                    ],
                                    [
                                        'name' => 'Priya Singh',
                                        'email' => 'priya@example.com',
                                        'phone' => null,
                                        'message' => 'Feedback about your website',
                                        'status' => 'Resolved',
                                    ],
                                ];
                            @endphp

                            @foreach ($contacts as $contact)
                                <tr>
                                    {{-- ID --}}
                                    <td>{{ $loop->iteration }}</td>

                                    {{-- NAME --}}
                                    <td><strong>{{ $contact['name'] }}</strong></td>

                                    {{-- EMAIL --}}
                                    <td>{{ $contact['email'] }}</td>

                                    {{-- PHONE --}}
                                    <td>{{ $contact['phone'] ?? 'N/A' }}</td>

                                    {{-- MESSAGE --}}
                                    <td>
                                        <small style="color:#555;">
                                            {{ $contact['message'] }}
                                        </small>
                                    </td>

                                    {{-- STATUS --}}
                                    <td>
                                        @if ($contact['status'] == 'Pending')
                                            <span class="status inactive">
                                                <i class="fas fa-circle"></i>
                                                Pending
                                            </span>
                                        @else
                                            <span class="status active">
                                                <i class="fas fa-circle"></i>
                                                Resolved
                                            </span>
                                        @endif
                                    </td>

                                    {{-- ACTION --}}
                                    <td>
                                        <div class="action-buttons">
                                            {{-- View --}}
                                            <a href="{{ route('contacts.show')}}" class="action-btn edit-btn"
                                                title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>


                                            {{-- Delete --}}
                                            <button type="button" class="action-btn delete-btn" title="Delete"
                                                onclick="return confirm('Delete this message?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
