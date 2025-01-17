{{-- resources/views/contacts.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Contact Messages</h2>
                    </div>
                    <div class="card-body">
                        @if ($contacts->isEmpty())
                            <p>No contact messages available.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Received At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ Str::limit($contact->message, 50) }}...</td> {{-- Truncate long messages --}}
                                            <td>{{ $contact->created_at->format('d-m-Y H:i') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .card-header h2 {
        font-size: 2rem;
        font-weight: bold;
    }

    .card-body {
        text-align: left;
        line-height: 1.6;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .container {
        margin-top: 30px;
    }
</style>
