<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcool</title>
    <h1>Liste des types d'alcools</h1>
    <a href="{{ route('home') }}">Retour à l'accueil</a>
    <a href="{{ route('alcools.create') }}">Ajouter un type d'alcools</a>
    <table border="2">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!is_null($type_alcools) && !empty($type_alcools))
                @foreach ($type_alcools as $type_alcool)
            <tr>
                <td>{{ $type_alcool->id }}</td>
                <td>{{ $type_alcool->name}}</td>
                <td>{{ $type_alcool->created_at}}</td>
                <td>{{ $type_alcool->updated_at}}</td>
                <td>
                    <a href="{{ route('alcools.edit',$type_alcool->id)}}">Modifier</a>
                    <a class="delete" href="{{ route('alcools.delete',$type_alcool->id)}}"> Supprimer</a>
                </td>
            </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <script>
        let del = document.querySelectorAll(".delete");
        del.forEach(element => {
            element.addEventListener("click",function(event){
                alert('Confirmez vous la suppression ?')
            })
        });
    </script>
</head>
<body>
    
</body>
</html>