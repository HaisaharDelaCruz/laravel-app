<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes</title>
</head>
<body>
    <a href="{{ route('estudiantes') }}">Listar estudiantes</a>
    <a href="{{ route('crear') }}">Crear estudiante</a>
    <h1>@yield('titulo')</h1>
    @yield('content')
</body>
</html>