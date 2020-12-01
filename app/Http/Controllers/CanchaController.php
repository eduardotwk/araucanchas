<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cancha;
use App\Models\Recinto;
class CanchaController extends Controller
{
    public function index()
    {
        $canchas = Cancha::orderby('id','DESC')->paginate(10);

        return view('cancha.index', compact('canchas'));

    }
    public function create()
    {
        $canchas =Recinto::all();
        return view('cancha.create', compact('canchas'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        $cancha = new Cancha();
        $cancha->numero_cancha = $request->numero_cancha;
        $cancha->tarifa = $request->tarifa;
        $cancha->recinto_id = $request->recinto_id;

        $cancha->save();
        return redirect()->route('cancha.index')
            ;

    }
    public function destroy(Cancha $cancha)
    {
        $cancha->delete();
        return redirect()->route('cancha.index');
    }

    public function edit(Cancha $cancha)
    {
        return view('cancha.edit', compact ('cancha'));
    }
    public function update(Request $request , Cancha $cancha)
    {
        $cancha->numero_cancha = $request->numero_cancha;
        $cancha->tarifa = $request->tarifa;
        $cancha->save();
        return redirect()->route('cancha.index', $cancha);
    }
}
