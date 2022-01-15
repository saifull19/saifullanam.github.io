{{-- @dd($post)  Var dump --}}

@extends('layouts.main')

@section('container')



<div class="card shadow p-3 mb-5 bg-body rounded">
 

  <div class="container">

     <h1 class="mb-3 text-center">{{ $title }}</h1>

     <div class="row justify-content-center mb-3">
       <div class="col-sm-6">
         {{-- form search --}}
          <form action="/posts">

            @if (request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if (request('author'))
              <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search..." name="search" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}">
              <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
            </div>
          </form>
       </div>
     </div>

    @if ($posts->count())

      <div class="card mb-3">
        @if ($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid ">
             </div>
        @else    
               <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }} ">   
         @endif
        
        <div class="card-body text-center">
          <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>

          <p>
              <small class="text-muted">
              By. <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>in 

              {{-- /posts?category= untuk searching awal sebelumnya /categories/ --}}
              
              <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug
              }}">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}   {{--  created at -> difforhumans untuk menampilkan waktu yang di skitar manusia --}}
            </small>
          </p>
          <p class="card-text">{{ $posts[0]->excerpt }}</p>

          <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read More</a>
        </div>
    </div>
      
  

    <div class="row">
      {{-- post skip untuk menampilkan postingan yang terakhir kali di tambahkan --}}
      @foreach ($posts->skip(1) as $post)
        <div class="col-sm-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
              {{-- /posts?category= untuk searching awal sebelumnya /categories/ --}}
              <a class="text-decoration-none text-white" href="/posts?category={{ $posts[0]->category->slug }}">{{ $post->category->name }}</a>
            </div>
            @if ($post->image)
                      <div style="max-height: 350px; overflow:hidden;">
                          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                      </div>
                      @else    
                      
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }} " class="card-img-top" alt="{{ $post->category->name }} ">
                      @endif
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <small>
                By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
              </small>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>   
      @else
      <p class="text-center fs-4">No Post not Found</p>    
      
      @endif

      {{-- untuk membuat links pada paginations --}}
      <div class="justify-content-center">
        {{ $posts->links() }}
      </div>
</div>
  

  @endsection





  

  {{-- @foreach ($posts->skip(1) as $post)
  <article class="mb-5 border-bottom pb-4">
    <h2>
      <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>

    <p>By. <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug
     }}">{{ $post->category->name }}</a></p>
  
  <p>{{ $post->excerpt }}</p>

  <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read More</a>
  </article>
  @endforeach
 --}}