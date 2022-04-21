<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Bienvenue dans la personnalisation de votre cocktails</h1>
    <li><a href="{{ route('home') }}">Home</a></li>
</head>
<body>
    <form method="post" action="{{ route('cocktails.store')}}">
        <h2>Les Softs</h2>
            @csrf 
            <tbody>

            @if (!is_null($softs) && !empty($softs))
               
                    @foreach ($softs as $soft)
                    <input type="checkbox" name="choix[]" value="{{ $soft->name}}">{{ $soft->name}}<br>
                    @endforeach
                   
                
                    
            @endif
            </tbody>

        <h2>Les sirops</h2>
            <tbody>
            @if (!is_null($syrups) && !empty($syrups))
                    @foreach ($syrups as $syrup)
                <input type="checkbox" name="choix[]" value="{{ $syrup->name}}">{{ $syrup->name}}<br>
                
                    @endforeach
            @endif
            </tbody>
        
        <h2>Les Fruits</h2>
            <tbody>
            @if (!is_null($fruits) && !empty($fruits))
                    @foreach ($fruits as $fruit)
                <input type="checkbox" name="choix[]" value="{{ $fruit->name}}">{{ $fruit->name}}<br>
                
                    @endforeach
            @endif
            </tbody>
        <h2>Les Verres</h2>
            <tbody>
            @if (!is_null($glasses) && !empty($glasses))
                    @foreach ($glasses as $glasse)
                <input type="checkbox" name="choix[]" value="{{ $glasse->name}}">{{ $glasse->name}}<br>
                
                    @endforeach
            @endif
            </tbody>
        <h2>Les Types d'alcool</h2>
            <tbody>
            @if (!is_null($types_Of_Alcohol) && !empty($types_Of_Alcohol))
                    @foreach ($types_Of_Alcohol as $typeOfAlcohol)
                <input type="checkbox" name="choix[]" value="{{ $typeOfAlcohol->name}}">{{ $typeOfAlcohol->name}}<br>
                
                    @endforeach
            @endif
            </tbody>
            <input type="submit"name="submit" id="button" value="Valider" />
    </form>
</body>
</html>
