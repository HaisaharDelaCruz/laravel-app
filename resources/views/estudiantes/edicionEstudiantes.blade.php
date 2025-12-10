@extends('layout.inicio')
@section('titulo', 'Edición de Estudiante')
@section('content')
    <form action="{{ route('actualizar', ['id' => $estudiante['id']]) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" value="{{ $estudiante['name'] }}"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $estudiante['email'] }}"><br><br>

        <label for="phone">Teléfono:</label>
        <input type="text" id="phone" name="phone" value="{{ $estudiante['phone'] }}"><br><br>

        <label for="language">Lenguaje:</label>
        <input type="text" id="language" name="language" value="{{ $estudiante['language'] }}"><br><br>

        <input type="submit" value="Actualizar Estudiante">
    </form>
@endsection