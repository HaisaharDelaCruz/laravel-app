@extends('layout.inicio')
@section('titulo', 'Crear estudiante')
@section('content')

<form action="{{ route('guardar') }}" method="POST">
    @csrf
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="phone">Teléfono:</label>
    <input type="text" id="phone" name="phone"><br><br>
    <label for="language">Lenguaje:</label>
    <input type="text" id="language" name="language"><br><br>
    <input type="submit" value="Crear Estudiante">
</form>

@endsection