@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Comments</h2>
                    </div>
                    <div class="card-body">
                        @if ($articles->isEmpty())
                            <p>No articles or comments available.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Article Id</th>
                                        <th>Article Title</th>
                                        <th>Commenter Name</th>
                                        <th>Message</th>
                                        <th>Posted At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                        @foreach ($article->comments as $comment)
                                            <tr>
                                                <td>{{ $article->id }}</td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $comment->name }}</td>
                                                <td>{{ Str::limit($comment->message, 50) }}...</td> {{-- Truncate long messages --}}
                                                <td>{{ $comment->created_at->format('d-m-Y H:i') }}</td>
                                                <td>
                                                    <!-- Button to delete the comment -->
                                                    <form action="{{ route('comments.destroy', $comment->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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
