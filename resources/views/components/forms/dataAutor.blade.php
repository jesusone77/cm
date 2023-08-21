@extends('components.welcome')

@section('title', 'Actualiza Autor')

@section('content')
    <form action="/autors/{{ $autor->id }}" method="POST">
        @method('PUT')
        @csrf
    <label for="name">Nombre:</label>
    <input type="text" name="name" value="{{$autor->name}}"  required>
    <label for="email">Email:</label>
    <input type="email" name="email"  value="{{$autor->email}}" required>
    <input type="submit" value="Crear">
@endsection