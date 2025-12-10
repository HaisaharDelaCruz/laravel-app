
## Inicio de la App
Para inicializar la app solo tienes que escribir el siguiente comando.


```bash
  php artisan serve --port=5000
```

## API Reference

#### Obtener los estudiantes

```http
  GET /api/students
```

#### Crear estudiantes

```http
  POST /api/students
```

#### Editar estudiantes
```http
  PUT /api/students/{$id}
```

#### Eliminar estudiantes
```http
  DELETE /api/students/{$id}
```
