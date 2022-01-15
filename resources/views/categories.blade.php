{{-- @dd($post)  Var dump --}}

@extends('layouts.main')

@section('container')

<div class="card shadow p-3 mb-5 bg-body rounded">
    <h1 class="mb-5">Posts Categories</h1>

    <div class="container">
      <div class="row pb-5">
        @foreach ($categories as $category)
        <div class="col-sm-4">
          <a href="/posts?category={{ $category->slug }}">
          <div class="card bg-dark text-white cardd">
            <img src="https://source.unsplash.com/500x400?{{ $category->name }} " class="card-img" alt="{{ $category->name }}">
            <div class="card-img-overlay d-flex align-items-center p-0 cio">
              <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
              
            </div>
          </div>
          </a> 
        </div>
        @endforeach
      </div>
    </div>

  {{-- @foreach ($categories as $category)
  <ul class="mb-5">
    <li>
      <h2>
      <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
    </h2>
    </li>
  
  
  </ul>
  @endforeach
  </div> --}}
  
  </div>

  @endsection