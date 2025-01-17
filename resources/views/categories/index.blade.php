{{-- resources/views/categories/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Categories</h2>
                        <a href="{{ route('categories.create') }}" class="btn btn-success">Create Category</a>
                    </div>
                    <div class="card-body">
                        @if ($categories->isEmpty())
                            <p>No categories available.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                                <form action="{{ route('categories.destroy', $category->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
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

    .btn-success,
    .btn-danger {
        margin-top: 10px;
    }

    .container {
        margin-top: 30px;
    }
</style>
