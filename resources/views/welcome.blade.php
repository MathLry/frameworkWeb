<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/welcome.css">
    <title>Welcome</title>
</head>
<body>

<header>
    
    <div class="navbar">
            <li><a href="{{ route('cocktails.index')}}">Personnaliser votre cocktail</a></li>
            <li><a href="{{ route('listAlcool.index')}}">Notre menu</a></li>
        <a href="#" class="btn-S-identifier">S'identifier</a>
    <div>

    <style>
        *
        {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            align-items: center;
        
        }

        p{
            font-weight: 300;
            
        }


        header{

            background: black;
            position: fixed;
            top: 0%;
            left: 0%;
            padding: 20px 10px;
            width: 100%;
            z-index: 1;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            transition: 0.5s;

        }

        header .navbar li a:hover{
            color: #555b61;
            border-bottom: 2px solid #555b61;
        }



        .navbar{
            display: flex;
            position: relative;
            
        }

        .navbar li{
            list-style: none;
            color: white;
            text-decoration: none;
            margin-left: 30px;
            font-weight: 700;
        }

        .navbar a{
            color: white;
            text-decoration: none;
            margin-left: 45px;
            font-weight: 700;

        }




        .btn-S-identifier{
            padding: 10px 20px;
            background: #555b61;
            margin-top: -3px;
            text-transform: uppercase;
            margin-right: 0px;
        }

        .btn-S-identifier:hover{
            background: #383e42;
            transition: ease-out;
            
        }

        .banniere{
            position: relative;
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(/images/drinks.jpg);
            background-size: cover;
            background-position: center;
            opacity: 90%;
        }

        .banniere .contenu{
            max-width: 70%; 
            text-align: center;

        }

        .banniere .contenu h2{
            color: #ffffff;
            margin-bottom: auto;
            font-size: 3em;
            text-transform: capitalize;


        }

        .contenu p:nth-child(2){
            margin-bottom: auto;
            color: #ffffff;
            font-size: 1.2em;
            
        }

        .btn-découvrir-1{
            color: #ffffff;
            font-size: 30px;
            padding: 10px 20px;
            background: #555b61;
            border-radius: 30%;
            text-transform: uppercase;
            margin-right: 0px;
            text-decoration: none;
            list-style: none;
            font-weight: 700;
            position: relative;
            right: 470px;
            top: -180px;
        }


        .btn-découvrir-1:hover{
            background: #383e42;
            transition: ease-out;

        }

        .btn-découvrir-2{
            color: #ffffff;
            font-size: 30px;
            border-radius: 30%;
            padding: 10px 20px;
            background: #555b61;
            text-transform: uppercase;
            margin-right: 0px;
            text-decoration: none;
            list-style: none;
            font-weight: 700;
            position: relative;
            right: -450px;
            top: 180px;


        }

        .btn-découvrir-2:hover{
            background: #383e42;
            transition: ease-out;

        }

        .baspage{
            background: black;

        }

        .container1{
            margin: 0 auto;
            width: 500px; 
            display: flex;
            text-align: center;
            line-height : 35px;

        }

        .container2{
            margin-left: 15em;
            line-height : 35px;
            position: relative;
            width: 500px
            

        }

        .newsletter{
            line-height: 35px;
        }

        .newsletter h2 {
            color:white;
            font-size: 1.5em;
            position: relative;

        }

        .newsletter p {
            color:white;
            font-size: 1em;
            position: relative;
        }


        .baspage h2{
            color: white;
        }

        .baspage p{
            color: white;

        }

        .search-bar {
            height: 46px;
            border: 0.5px solid lightgrey;
            width: 100%;
            padding-right: 40px;
            padding-left: 10px;
        }

        

    </style>

</header>   
    
</body>
</html>