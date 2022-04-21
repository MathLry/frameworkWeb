<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Syrup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body, h1, h2, a {
            font-family: 'Nunito', sans-serif;
        }

        body {
            padding-inline: 100px;
            padding-top: 50px;
        }

        li {
            list-style-type: none;
        }
    </style>
</head>
<body>
    <h1>BLOG</H1>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('syrups.index') }}">List of Syrups</a></li>
    </ul>
    <h2>Add a syrup</h1>

    <form action="{{ route('syrups.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="ms-3" type="text" name="name">
        <input type="file" name="image">
        <button type="submit">Send</button>
    </form>
   
</body>
</html>