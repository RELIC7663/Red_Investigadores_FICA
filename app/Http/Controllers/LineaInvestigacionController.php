<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LineaInvestigacion;
use App\Models\AreasInvestigacion;

class LineaInvestigacionController extends Controller
{
    // Mostrar todas las líneas de investigación con su área correspondiente
    public function index()
    {
        $lineas = LineaInvestigacion::with('areaInvestigacion')->orderBy('nombre', 'asc')->get();
        return view('Investigacion.Investigacion', compact('lineas'));
    }

    // Mostrar formulario de creación, incluyendo las áreas disponibles
    public function create()
    {
        $areas = AreasInvestigacion::all();
        return view('Investigacion.CrearLinea', compact('areas'));
    }

    // Almacenar nueva línea de investigación
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'area_investigacion_id' => 'required|exists:areas_investigacion,id'
        ]);

        LineaInvestigacion::create($request->all());
        return redirect()->route('lineas.index')->with('success', 'Línea de investigación creada exitosamente.');
    }

    // Mostrar formulario de edición, incluyendo las áreas disponibles
    public function edit(LineaInvestigacion $linea)
    {
        $areas = AreasInvestigacion::all();
        return view('Investigacion.EditarLinea', compact('linea', 'areas'));
    }

    // Actualizar línea de investigación
    public function update(Request $request, LineaInvestigacion $linea)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'area_investigacion_id' => 'required|exists:areas_investigacion,id'
        ]);

        $linea->update($request->all());
        return redirect()->route('lineas.index')->with('success', 'Línea de investigación actualizada correctamente.');
    }

    // Eliminar línea de investigación
    public function destroy(LineaInvestigacion $linea)
    {
        $linea->delete();
        return redirect()->route('lineas.index')->with('success', 'Línea de investigación eliminada correctamente.');
    }
}
