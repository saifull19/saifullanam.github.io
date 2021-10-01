

@extends('layouts.main')

@section('container')


<div class="card shadow p-3 mb-5 bg-body rounded">
    
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-sm-8"> 
                <h2 class="mb-3">{{ $post->title }}</h2>
    
        
                    <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug
                    }}">{{ $post->category->name }}</a></p>

                    @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
                    </div>
                    @else    
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid ">
                    @endif
                                
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
    
    
                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
    
</div>



@endsection