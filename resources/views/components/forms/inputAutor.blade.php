@extends('components.welcome')

@section('title', 'Agregar Autor')

@section('content')
<form action="/autors" method="post">
    @csrf @method('POST')
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <input type="submit" value="Crear">
</form>
@endsection