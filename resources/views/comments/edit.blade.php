@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

            <h2 class="d-flex justify-content-center">Add a comment</h2>

            <div class="container w-75 p-3 display-5 d-flex justify-content-center">
                <b>Title: </b> 
                {{ $post->title }}
            </div>

            <form class="container w-50 p-3 shadow" action="{{ route('post.comment.update',[$post->id, $comment->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Comment</label>
                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="6" placeholder="Comment">{{ old('description') ?? $comment->description }}</textarea>

                    @error('description')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>

@endsection