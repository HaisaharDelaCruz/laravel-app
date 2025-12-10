<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class estudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Http::get('http://127.0.0.1:8000/api/students')->json();
        return view('estudiantes.estudiantes', compact('estudiantes'));
    }

    public function crear(){
        return view('estudiantes.crearEstudiantes');
    }

    public function guardar(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'language']);
        $response = Http::post('http://127.0.0.1:8000/api/students', $data);
        return redirect()->route('estudiantes');
    }

    public function editar($id)
    {
        $estudiante = Http::get("http://127.0.0.1:8000/api/students/{$id}")->json();
        return view('estudiantes.edicionEstudiantes', compact('estudiante'));
    }

    public function actualizar(Request $request, $id)
    {
        $data = $request->only(['name', 'email', 'phone', 'language']);
        $response = Http::put("http://127.0.0.1:8000/api/students/{$id}", $data);
        return redirect()->route('estudiantes');
    }

    public function borrar($id)
    {
        $response = Http::delete("http://127.0.0.1:8000/api/students/{$id}");
        return redirect()->route('estudiantes');
    }
}
