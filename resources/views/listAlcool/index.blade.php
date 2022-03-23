<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcool</title>
    <h1>Liste des types d'alcools</h1>
    <a href="{{ route('home') }}">Retour à l'accueil</a>
    <a href="{{route('listAlcool.create') }}">Ajouter une boisson </a>
    <table border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>degree</th>
                <th>type_alcools</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!is_null($list_alcools) && !empty($list_alcools))
                @foreach ($list_alcools as $list_alcool)
            <tr>
                <td>{{ $list_alcool->id }}</td>
                <td>{{ $list_alcool->name}}</td>
                <td>{{ $list_alcool->degre}}</td>
                <td>{{ $list_alcool->alcool_type}}</td>
                <td>{{ $list_alcool->created_at}}</td>
                <td>{{ $list_alcool->updated_at}}</td>
                
                <td>
                    <a href="#">Modifier</a>
                    <a class="delete" href="#"> Supprimer</a>
                </td>
            </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <script>
    
    </script>
</head>
<body>
    
</body>
</html>