{{-- @dd($post)  Var dump --}}

@extends('layouts.main')

@section('container')
<div class="card shadow p-3 mb-5 bg-body rounded">
<h1 class="mb-5">Post Category : {{ $category }}</h1>

  @foreach ($posts as $post)
  <article class="mb-5">
    <h2>
      <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
    </h2>
  
  <p>{{ $post->excerpt }}</p>
  </article>
  @endforeach
</div>
  @endsection