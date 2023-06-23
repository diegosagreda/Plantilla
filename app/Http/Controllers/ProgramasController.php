<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facultades;
use App\Models\Programas;


class ProgramasController extends Controller
{
    //
    public function index(){
        $programas = Programas::all();
        return view('programas.listado', compact('programas'));
    }
    public function create(){
        $facultades = Facultades::all();
        return view('programas.create', compact('facultades'));
    }
    public function store(Request $request){
        $programa = new Programas();
        $programa->codprograma = $request->codprograma;
        $programa->nomprograma = $request->nomprograma;
        $programa->facultad_codfacultad = $request->facultad_codfacultad;

        $programa->save();
        return redirect()->route('programas.listado');
    }
    public function destroy(Request $request, $codprograma){

        $programa = Programas::where('codprograma',$codprograma)->firstOrFail();
        $programa->delete();
        return redirect()->route('programas.listado');
    }
}
