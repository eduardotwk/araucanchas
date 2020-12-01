<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recinto;
class RecintoController extends Controller
{
    public function index()
    {
        $recintos = Recinto::orderby('id','DESC')->paginate(10);

        return view('recinto.index', compact('recintos'));

    }
    public function create()
    {
        return view('recinto.create');
    }
    public function store(Request $request)
    {
        $value = new Recinto();
        $value->nombre_recinto = $request->nombre_recinto;
        $value->ubicación = $request->ubicación;
        $value->contacto = $request->contacto;
        $value->cantidad_canchas = $request->cantidad_canchas;
        $value->save();
        return redirect()->route('recinto.index')
            ->with('success', 'Registro exitoso');

    }
    public function edit(Recinto $value)
    {
        return view('recinto.edit', compact ('value'));
    }

    public function update(Request $request , Recinto $value)
    {
$value->nombre_recinto = $request->nombre_recinto;
        $value->ubicación = $request->ubicación;
        $value->contacto = $request->contacto;
        $value->cantidad_canchas = $request->cantidad_canchas;
        $value->save();
        return redirect()->route('recinto.index', $value);
    }

    public function destroy(Recinto $value)
    {
        $value->delete();
        return redirect()->route('recinto.index');
    }

    public function show(Project $value)
    {
        return view('projects.show', compact('value'));
    }
}

