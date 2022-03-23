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
   <h2>Ajouter une boisson </h2>
   
   <form action="{{ route('listAlcool.store') }}" method="POST" >
     @csrf  
    <input type="text" name="name" placeholder="name">
    <input type="text" name="degre" placeholder="degre">
   <
<SELECT name="alcool_type" size="1">
    @foreach($type_alcools as $type_alcool)
<OPTION>{{ $type_alcool->name}}
   @endforeach
</SELECT>
 
    <button type="submit">Ajouter</button>


   </form>
  
</head>
<body>
    
</body>
</html>