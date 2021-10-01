@extends('layouts.main')

@section('container')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 class="text-light mx-5">Profil</h1>
<img class="rounded-circle" src="img/{{ $image }}" alt="{{ $nama }}" width="200 ">
  <h3 class="text-light mx-4 my-3 fst-italic">{{ $nama }}</h3>
  <h3 class="text-light fst-italic">{{ $email }}</h3>

  @endsection