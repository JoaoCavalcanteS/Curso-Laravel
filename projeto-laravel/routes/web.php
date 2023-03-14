<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', [ProdutoController::class,'home']);

Route::get('/produto', [ProdutoController::class,'index']);//quero que execute minha funcao index dentro da minha controler
Route::get('/produto/{produto}', [ProdutoController::class, 'show']);