@extends('layouts.app')

@section('pagetitle', 'Usuários')

@section('main')
<h1>Hello World</h1>
<p>{{ $greeting }}</p>

<figure>
  <img src="{{ Vite::asset('resources/images/github_profile.jpeg') }}" alt="" />
</figure>

<ul>
  @foreach ($users as $user)

  @php
  $name = $user->name;
  $email = $user->email;
  @endphp

  <li>
    {{ $name }} ({{ $email }})
  </li>
  @endforeach
</ul>
@endsection