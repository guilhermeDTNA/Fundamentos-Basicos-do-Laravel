@extends('layouts.app')

@section('pagetitle', 'Cadastrar usuário')

@section('main')
  <h1>Cadastrar usuário</h1>

  <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    {{ $errors->any() }}
    @if ($errors->any())
      <div class="errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <fieldset>
      <label for="email">E-mail</label>
      <input type="text" name="email" id="email" value="{{ old('email') }}">
    </fieldset>

    <fieldset>
      <label for="name">Nome</label>
      <input type="text" name="name" id="name" value="{{ old('name') }}">
    </fieldset>

    <fieldset>
      <label for="password">Senha</label>
      <input type="password" name="password" id="password">
    </fieldset>

    <fieldset>
      <label for="avatar">Avatar</label>
      <input type="file" name="avatar" id="avatar">
    </fieldset>

    <fieldset>
      <button type="submit">Cadastrar</button>
    </fieldset>
  </form>

  <a href="{{ route('users.show') }}">Listar usuários</a>
@endsection
