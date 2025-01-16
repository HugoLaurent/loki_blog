{{-- resources/views/articles/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Article</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articles.update', $article->slug) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- We need to use the PUT method for updates -->

                            <!-- Title -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', $article->title) }}" required>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Author -->
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" name="author" id="author" class="form-control"
                                    value="{{ old('author', $article->author) }}" required>
                                @error('author')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == old('category_id', $article->category_id) ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Image (Optional) -->
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Content -->
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content', $article->content) }}</textarea>
                                @error('content')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Update Article</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
