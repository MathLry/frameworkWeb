<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alcool</title>
    <h1>Alcool</h1>
    <a href="{{ route('home') }}">Retour à l'accueil</a>
    <a href="{{ route('listAlcool.index') }}">Retour à la liste des alcools</a>
   <h2> Modifier l'alcool</h2>
   
   <form action="{{ route('listAlcool.update',$list_alcool->id) }}" method="POST" >
     @csrf
     @method("PUT")
    <input type="text" name="name" placeholder="name" value="{{$list_alcool->name}}">
    <input type="text" name="degre" placeholder="degre" value="{{$list_alcool->degre}}">
    <button type="submit">Modifier</button>


   </form>
  
</head>
<body>
    
</body>
</html>