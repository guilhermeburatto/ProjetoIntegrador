<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Index de Tipo Produto</title>
</head>
<body>
    <div class="container">
    <a href={{route('tipoproduto.create')}} class="btn btn-primary">Criar um Tipo de Produto</a>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tipoProdutos as $tipoProduto)
                <tr>
                    <th scope="row">{{$tipoProduto->id}}</th>
                    <td>{{$tipoProduto->descricao}}</td>      
                    <td>
                        <a href={{route('tipoproduto.show', $tipoProduto->id)}} class="btn btn-primary">Show</a>
                        <a href={{route('tipoproduto.edit', $tipoProduto->id)}} class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>              
                </tr>
            @endforeach
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>