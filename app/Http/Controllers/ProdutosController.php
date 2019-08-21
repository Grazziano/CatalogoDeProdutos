<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();
        print_r($produtos);
    }

    public function show($id)
    {
        $produtos = Produtos::find($id);
        print_r($produtos);
    }
}
