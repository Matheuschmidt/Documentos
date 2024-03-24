<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;


// Rotas para o recurso Livro
Route::resource('livros', LivroController::class);
