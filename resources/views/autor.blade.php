@extends('components.welcome')
@section('title', 'Autor')
@section('content')
    <div>
        <a href="/autors/create">Crear Autor</a>
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
                    <td>
                        <form action="/autors/{{$user->id}}/edit/" method="PUT">
                            @csrf
                            @method('PUT')
                            <input type="submit" value="Update">
                        </form>
                    </td>
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
@endsection