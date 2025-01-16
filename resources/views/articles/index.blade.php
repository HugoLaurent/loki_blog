{{-- resources/views/articles/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('articles.index') }}" method="GET" class="mb-4">
            <select name="category_id" class="form-select" onchange="this.form.submit()">
                <option value="">All categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </form>
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-xs-12 col-sm-4 mb-4">
                    <div class="card">
                        <a class="img-card">
                            <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                        </a>
                        <div class="card-body">
                            <p class="card-text"><small class="text-muted">By {{ $article->author }}</small></p>
                            <h4 class="card-title">{{ $article->title }}</h4>
                            <p class="card-text">{{ $article->start_article }}</p>
                            <p class="card-text"><small class="text-muted">Category: {{ $article->category->name }}</small>
                            </p>


                        </div>
                        <div class="card-footer text-center">
                            <a href="" class="btn btn-link">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{--        
        <div class="row justify-content-center">
            <div class="col-md-4">
                {{ $articles->links() }}
            </div>
        </div> --}}
    </div>

    <style>
        .card {
            display: flex;
            height: 600px;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            transition: box-shadow .25s;
        }

        .card:hover {
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .img-card {
            width: 100%;
            height: 200px;
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
            display: block;
            overflow: hidden;
        }

        .img-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: all .25s ease;
        }

        .card-body {
            padding: 15px;
            text-align: left;
        }

        .card-title {
            margin-top: 0px;
            font-weight: 700;
            font-size: 1.65em;
        }

        .card-title a {
            color: #000;
            text-decoration: none !important;
        }

        .card-footer {
            border-top: 1px solid #D4D4D4;
        }

        .card-footer a {
            text-decoration: none !important;
            padding: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        /* Center image on small screens */
        @media (max-width: 768px) {
            .img-card img {
                object-fit: contain;
            }
        }
    </style>
@endsection
