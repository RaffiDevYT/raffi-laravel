@extends('dashboard.layouts.main')

@section('container')
<div class="container px-5">
    <div class="container px-5 flex justify-content-center">

        <div class="row ">
            <div class="col-md-1"></div>
                <h2>{{ $post->title }}</h2>
                <div class="mb-1">
                    <a href="/dashboard/posts" class=" btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts </a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class=" btn btn-warning"><span data-feather="edit"></span> Edit </a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger" onclick="return confirm('Delete data?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                </div>
                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mb-2">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-2">
                @endif

                {!! $post->body !!}

        </div>
    </div>
    </div>
@endsection