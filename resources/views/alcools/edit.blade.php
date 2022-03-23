<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcool</title>
    <h1>Alcool</h1>
    <a href="{{ route('home') }}">Retour à l'accueil</a>
    <a href="{{ route('alcools.index') }}">Retour à la liste des types d'alcools</a>
   <h2> Modifier le type d'alcool</h2>
   
   <form action="{{ route('alcools.update',$type_alcool->id) }}" method="POST" >
     @csrf
     @method("PUT")
    <input type="text" name="name" placeholder="name" value="{{$type_alcool->name}}">
    <button type="submit">Modifier</button>


   </form>
  
</head>
<body>
    
</body>
</html>