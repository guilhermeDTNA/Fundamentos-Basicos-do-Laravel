<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();

    return view('users.index', [
      'greeting' => 'Hello World',
      'users' => $users
    ]);
  }

  public function show(User $user)
  {
    return view('users.show', [
      'user' => $user
    ]);
  }

  function create()
  {
    return view('users.create');
  }

  function store(Request $request)
  {
    $input = $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|min:3',
      'avatar' => 'file'
    ]);

    if (!empty($input['avatar']) && $input['avatar']->isValid()) {
      $url = $input['avatar']->store();
      // URL do arquivo enviado
      // Se no .env está FILESYSTEM_DISK=public, o arquivo será salvo em storage/app/public, caso contrário em storage/app/private
      dd($url);
    }

    dd($input);
    // Salvando usuário no BD
    //User::create($input);
    //return redirect()->back();
  }
}
