<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LineaInvestigacion;

class LineaInvestigacionController extends Controller
{
    // Mostrar todas las líneas de investigación
    public function index()
    {
        $lineas = LineaInvestigacion::orderBy('fecha', 'desc')->get();
        
        // Generar lista de años únicos
        $years = $lineas->unique('anio') // Filtra registros únicos por año
                      ->pluck('anio')    // Obtiene solo los valores de 'anio'
                      ->sort();          // Ordena los años
    
        return view('Investigacion.Investigacion', compact('lineas', 'years'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('Investigacion.CrearLinea');
    }

    // Almacenar nueva línea de investigación
    public function store(Request $request)
    {
        $request->validate([
            'autor' => 'required|string|max:255',
            'proyecto' => 'required|string',
            'fecha' => 'required|date',
            'video_url' => 'nullable|url',
            'anio' => 'required|integer|min:2000|max:2100'
        ]);

        LineaInvestigacion::create($request->all());
        return redirect()->route('lineas.index')->with('success', 'Registro creado exitosamente');
    }

    // Mostrar formulario de edición
    public function edit(LineaInvestigacion $linea)
    {
        return view('Investigacion.EditarLinea', compact('linea'));
    }

    // Actualizar línea de investigación
    public function update(Request $request, LineaInvestigacion $linea)
    {
        $request->validate([
            'autor' => 'required|string|max:255',
            'proyecto' => 'required|string',
            'fecha' => 'required|date',
            'video_url' => 'nullable|url',
            'anio' => 'required|integer|min:2000|max:2100'
        ]);

        $linea->update($request->all());
        return redirect()->route('lineas.index')->with('success', 'Registro actualizado correctamente');
    }

    // Eliminar línea de investigación
    public function destroy(LineaInvestigacion $linea)
    {
        $linea->delete();
        return redirect()->route('lineas.index')->with('success', 'Registro eliminado permanentemente');
    }
}