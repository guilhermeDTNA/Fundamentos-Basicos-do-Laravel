<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/add", function () {
    $post = new \App\Models\Post();
    $post->title = "Meu primeiro post 1";
    $post->body = "Conteúdo do meu primeiro post";
    $post->save();
    dd($post);
});

Route::get("/findbyid", function () {
    $post = Post::find(1);
    dd($post);
});

Route::get("/findone", function () {
    $post = Post::where("title", "Meu primeiro post")->first();
    dd($post);
});

Route::get("/findmany", function () {
    $post = Post::where("title", "LIKE", "%Meu primeiro post%")
        ->orderBy("title", "DESC")
        ->get();
    dd($post);
});

Route::get("/update", function () {
    $post = Post::find(1);
    $input = [
        "title" => "Título atualizado via array",
        "body" => "Conteúdo atualizado via array",
    ];
    $post->fill($input);
    $post->save();
    dd($post);
});

Route::get("/delete", function () {
    $post = Post::find(1);
    $post->delete();
    dd($post);
});

Route::get("/usuario/{user}", [UserController::class, "show"]);

Route::get("/usuarios", [UserController::class, "index"]);
