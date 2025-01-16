@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $article->title }}</h2>
                        <small class="text-muted">By {{ $article->author }} | Category:
                            {{ $article->category->name }}</small>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <img src="/{{ $article->image }}" class="img-fluid" alt="{{ $article->title }}">
                        </div>
                        <p>{!! nl2br(e($article->content)) !!}</p> <!-- Displaying article content with line breaks -->
                    </div>
                    <div class="card-footer">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back to Articles</a>
                        <a href="{{ route('articles.edit', ['slug' => $article->slug]) }}" class="btn btn-primary">Edit
                            Article</a>
                        <form action="{{ route('articles.destroy', ['slug' => $article->slug]) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this article?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete Article</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .card-header h2 {
            font-size: 2rem;
            font-weight: bold;
        }

        .card-body {
            text-align: justify;
            line-height: 1.6;
        }

        .card-body img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .card-footer {
            text-align: center;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .card-footer a,
        .card-footer button {
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            margin: 5px;
            border-radius: 5px;
        }

        .card-footer .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .card-footer .btn-secondary:hover {
            background-color: #5a6268;
        }

        .card-footer .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .card-footer .btn-primary:hover {
            background-color: #0056b3;
        }

        .card-footer .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .card-footer .btn-danger:hover {
            background-color: #c82333;
        }

        .container {
            margin-top: 30px;
        }
    </style>
@endsection
