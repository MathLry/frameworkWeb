<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Glasses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body, h1, h2, a {
            font-family: 'Nunito', sans-serif;
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
        <li><a href="{{ route('glasses.create') }}">Add a glass</a></li>
    </ul>
    <h2>List of glasses</h1>

    <table class="p-2" border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>image</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($glasses) && !empty($glasses))
                @foreach($glasses as $glass)
                    <tr>
                        <td>{{ $glass->id }}</td>
                        <td>{{ $glass->name }}</td>
                        <td>{{ $glass->image }}<img src="{{ asset('storage/images/' . $glass->image) }}"></img></td>

                        <td>
                            <a href="{{ route('glasses.edit', $glass->id) }}">Edit</a>
                            <form action="{{ route('glasses.delete') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="glass_id" value="{{ $glass->id }}">
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