<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesores;

class ProfesoresController extends Controller
{
    //
    public function index(){
        $profesores = Profesores::all();
        return view('profesores.listado', compact('profesores'));
    }
    public function create(){
        return view('profesores.create');
    }
    public function store(Request $request){
        $profesor = new Profesores();
        $profesor->codprofesor = $request->codprofesor;
        $profesor->nomprofesor = $request->nomprofesor;
        $profesor->catprofesor = $request->catprofesor;

        $profesor->save();
        return redirect()->route('profesores.listado');
    }
    public function destroy(Request $request, $codprofesor){

        $profesor = Profesores::where('codprofesor',$codprofesor)->firstOrFail();
        $profesor->delete();
        return redirect()->route('profesores.listado');
    }
}
