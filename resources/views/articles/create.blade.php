@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Create a New Article</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" name="title" class="form-control" required>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Author Field -->
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" id="author" name="author" class="form-control" required>
                                @error('author')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Category Field -->
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Image Field -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" class="form-control" accept="image/*"
                                    required>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Content Field -->
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                                @error('content')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Create Article</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-group {
            margin-bottom: 15px;
        }

        .card-header h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-body form {
            padding: 15px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            margin-top: 15px;
        }
    </style>
@endsection
