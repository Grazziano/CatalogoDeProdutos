@extends('layouts.app')

@section('title', 'Lista de Produtos')
        
@section('content')
    <h1>Produtos</h1>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('produtos/busca')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="busca" id="busca" placeholder="Buscar produto no site ..." value="{{$buscar}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary">Buscar</button>
                    </div>
                </div>
            </form>            
        </div>
    </div>
    <div class="row">
        @foreach ($produtos as $produto)
        <div class="col-md-3">

                @if (file_exists("./img/produtos/".md5($produto->id).".jpg"))
                    <img src="{{url('img/produtos/'.md5($produto->id).".jpg")}}" alt="Imagem Produto" class="img-fluid img-thumbnail">            
                @endif

            <h4 class="text-center"><a href="{{URL::to('produtos')}}/{{$produto->id}}">{{$produto->titulo}}</a></h4>

            @if (Auth::check())           

            <div class="mb-3">                
                <form method="POST" action="{{action('ProdutosController@destroy', $produto->id)}}">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{URL::to('produtos/'.$produto->id.'/edit')}}" class="btn btn-primary">Editar</a>
                    <button class="btn btn-danger">Excluir</button>
                </form>
            </div>
            @endif
        </div>
    @endforeach
    </div>
{{$produtos->links()}}
@endsection