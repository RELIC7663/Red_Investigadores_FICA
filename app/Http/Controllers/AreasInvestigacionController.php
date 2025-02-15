<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreasInvestigacion;

class AreasInvestigacionController extends Controller
{
    public function index()
    {
        $areas = AreasInvestigacion::all();
        return view('Investigacion.AreasInvestigacion', compact('areas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        AreasInvestigacion::create($request->all());
        return redirect()->route('areas.index')->with('success', 'Área creada exitosamente.');
    }

    public function edit(AreasInvestigacion $area)
    {
        return view('Investigacion.EditarArea', compact('area'));
    }

    public function update(Request $request, AreasInvestigacion $area)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $area->update($request->all());
        return redirect()->route('areas.index')->with('success', 'Área actualizada correctamente.');
    }

    public function destroy(AreasInvestigacion $area)
    {
        $area->delete();
        return redirect()->route('areas.index')->with('success', 'Área eliminada correctamente.');
    }
}
