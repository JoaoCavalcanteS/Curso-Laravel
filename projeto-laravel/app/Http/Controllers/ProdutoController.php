<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index(Produto $produto){
        $produtos = Produto::all();

        return view('produto.index')->with('produtos', $produtos);

    }
    public function show(Produto $produto){
        // $produtos = Produto::all();

        return view('produto.show')->with('produto', $produto);

    }
    public function home(){
        $produtos = Produto::first();

        return view('welcome')->with('produtos', $produtos);

    }


}
