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

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $produto = new Produtos();

        $produto->sku = $request->input('sku');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if ($produto->save()) {
            return redirect('produtos/create')->with('success', 'Produto cadastrado com sucesso!');
        }
    }
}
