<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Bienvenue dans la liste des cocktails reçu</h1>
    <table border="2" cellspacing="0" cellpadding="">
    
    <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                
            </tr>
        </thead>
        <tbody>
            @if (!is_null($list_cocktails) && !empty($list_cocktails))
                @foreach ($list_cocktails as $list_cocktail)
            <tr>
                <td>{{ $list_cocktail->id }}</td>
                <td>{{ $list_cocktail->name}}</td>
                <td>{{ $list_cocktail->created_at}}</td>
                <td>{{ $list_cocktail->updated_at}}</td>
            </tr>
            @endforeach
            @endif
            </table>
</head>
<body>
    
</body>
</html>
