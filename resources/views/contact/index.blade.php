{{-- resources/views/contact/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="card-body">
                        {{-- Affichage du message de succès si disponible --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- Formulaire de contact --}}
                        <form method="POST" action="{{ route('contact.submit') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
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

    .card-body .form-control {
        border-radius: 5px;
    }

    .card-footer {
        text-align: center;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    .card-footer .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .card-footer .btn-primary:hover {
        background-color: #0056b3;
    }

    .container {
        margin-top: 30px;
    }
</style>
