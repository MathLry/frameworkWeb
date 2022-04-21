<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Fruits</title>
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

        td, th {
            flex-direction: column;
            border: medium solid;
            padding-inline: 15px;
            justify-content: center;
        }

        table {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Fruits</h1>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('fruits.create') }}">Add a fruit</a></li>
    </ul>
    <h2>List of fruits</h1>

    <table class="p-2">
        <thead>
            <tr>
                <th>name</th>
                <th>image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($fruits) && !empty($fruits))
                @foreach($fruits as $fruit)
                    <tr>
                        <td>{{ $fruit->name }}</td>
                        <td>{{ $fruit->image }}<img src="{{ asset('storage/images/'.$fruit->image) }}" width= '100' height='100'></img></td>

                        <td>
                            <form action="{{ route('fruits.edit', $fruit->id) }}" method="GET">
                                @csrf
                                <button type="submit">Edit</button>
                            </form>
                            <form action="{{ route('fruits.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="fruit_id" value="{{ $fruit->id }}">
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <script>
        let dels = document.querySelectorAll(".del");
        dels.foreach(element ==> {
            element.addEventListener("click", function(event) {
                alert('Are you sure?');
            })
        });
    </script>
</body>
</html>