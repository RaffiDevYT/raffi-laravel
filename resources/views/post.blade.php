@extends('layouts.main')

@section('container')

    <div class="container px-5">
    <div class="container px-5 flex justify-content-center">

        <div class="row ">
            <div class="col-md-1"></div>
                <h2>{{ $post->title }}</h2>
                <p>by <a href="/posts?author={{ $post->author ?? null }}">{{ $post->author ?? null }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</p></a>

                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                {!! $post->body !!}
            <a href="/posts">Back to Posts</a>

        </div>
    </div>
    </div>    
@endsection