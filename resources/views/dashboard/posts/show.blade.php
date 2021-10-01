@extends('dashboard.layouts.main')

@section('container')
<div class="card shadow p-3 mb-5 bg-body rounded">
    
    <div class="container">
        <div class="row my-3 ">
            <div class="col-sm-8"> 
                <h2 class="mb-3">{{ $post->title }}</h2>
    
        
                    {{-- <p>By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug
                    }}">{{ $post->category->name }}</a></p> --}}
                    <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Posts</a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="Edit"></span> Edit</a>
                    
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button href="" class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>hapus</button>
                    </form>

                    @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                    </div>
                    @else    
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
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