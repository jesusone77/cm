@extends('components.welcome')

@section('title','Libros')
@section('content')
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        @foreach ($editoriales as $editoriales)
            @if ($editoriales->type == 1)
                @continue
            @endif
            <tr>
                <td>{{ $editoriales->id }}</td>
                <td>{{ $editoriales->name }}</td>
                <td>{{ $editoriales->email }}</td>
                <td>
                    <form action="/autors/{{$editoriales->id}}" method="POST">
                        @csrf
                        @method('UPDATE')
                        <input type="submit" value="Update">
                    </form>
                </td>
                <td>
                    <form action="/autors/{{$editoriales->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
</div>
@endsection