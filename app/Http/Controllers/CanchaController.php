<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{


    public function index()
    {
        $canchas = Cancha::orderby('id','DESC')->paginate(10);

        return view('cancha.index', compact('canchas'));

    }

    public function create()
    {
        return view('cancha.create');
    }

    public function destroy($id)
    {
        Cancha::find($id)->delete();
        return redirect()->route('cancha.index')->wiht('success','eliminado exitoso');
    }

    public function update(Request $request, $id)    {
        //dd('update');
        $this->validate($request,[
            'numero_cancha'=>'required',
            'tarifa'=>'required',

        ]);

        Cancha::find($id)->update($request->all());
        return redirect()->route('cancha.index')->with('success','Registro actualizado satisfactoriamente');

    }
    public function edit($id)
    {
        //dd('edit');
        $cancha=Cancha::find($id);
        return view('cancha.edit',compact('cancha'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'numero_cancha' => 'required',
            'tarifa' => 'required',
        ]);

        Cancha::create($request->all());

        return redirect()->route('cancha.index')
            ->with('success', 'Project created successfully.');
    }
}
