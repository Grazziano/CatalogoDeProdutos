<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos - {{$produto->titulo}}</title>
</head>
<body>
    <h1>Produtos - {{$produto->titulo}}</h1>
    <ul>
            <li><strong>SKU: </strong>{{$produto->sku}}</li>
            <li><strong>Preço: </strong>{{$produto->preco}}</li>
            <li><strong>Adicionado em: </strong>{{$produto->created_at}}</li>
    </ul>
    <p>{{$produto->descricao}}</p>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>