<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h3>Autores</h3>
    </div>
    <div>
        <button>CREAR</button>
    </div>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>
            @foreach ($records as $user)
                @if ($user->type == 1)
                    @continue
                @endif
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a type="button"  href="/autors/{{$user->id}}">Update</td>
                    <td>
                        <form action="/autors/{{$user->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
    </div>
</body>

</html>
