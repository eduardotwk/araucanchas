<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Cancha;
class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::orderby('id','DESC')->paginate(10);

        return view('reserva.index', compact('reservas'));

    }
    public function create()
    {
        $reservas =Reserva::all();
        return view('reserva.create', compact('reservas'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $reserva = new Reserva();
        $reserva->fecha = $request->input('fecha');
        $reserva->hora_inicio = $request->input('hora_inicio');
        $reserva->hora_fin = $request->input('hora_fin');
        $reserva->cancha_id = $request->input('cancha_id');
        $reserva->save();
        return redirect()->route('reserva.index')
            ;

    }
}
