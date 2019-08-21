<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();

        return view('produtos.index', array('produtos' => $produtos));
    }

    public function show($id)
    {
        $produto = Produtos::find($id);
        
        return view('produtos.show', array('produto' => $produto));
    }
}
