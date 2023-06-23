<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facultades;

class FacultadesController extends Controller
{
    public function index(){
        $facultades = Facultades::all();
        return view('facultades.listado', compact('facultades'));
    }
    public function create(){
        return view('facultades.create');
    }
    public function store(Request $request){
        $facultad = new Facultades();
        $facultad->codfacultad = $request->codfacultad;
        $facultad->nomfacultad = $request->nomfacultad;
        $facultad->save();
        return redirect()->route('facultades.listado');
    }
    public function destroy(Request $request) {
        $facultad = $request->codfacultad;
        Facultades::where('codfacultad', $facultad)->delete();

        return redirect()->route('facultades.listado');
    }
    public function edit($codfacultad){
        $facultad = Facultades::where('codfacultad', $codfacultad)->first();
        return view('facultades.edit', compact('facultad'));
      }
    public function update(Request $request, $codfacultad){
        $facultad = Facultades::where('codfacultad',$codfacultad)->firstOrFail();

        $facultad->update($request->all());
        return redirect()->route('facultades.listado');
    }
}
