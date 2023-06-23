<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudades;
use App\Models\Barrios;
use App\Models\Programas;
use App\Models\Estudiantes;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiantes::all();

        return view('estudiantes.listado', compact('estudiantes'));
    }
    public function create(){
        $ciudades = Ciudades::all();
        $barrios = Barrios::all();
        $programas = Programas::all();
        return view('estudiantes.create', compact('ciudades', 'barrios' , 'programas'));
    }
    public function store(Request $request) {
        Estudiantes::create([
            'codestudiante' => $request->input('codestudiante'),
            'nomestudiante' => $request->input('nomestudiante'),
            'edaestudiante' => $request->input('edaestudiante'),
            'fechestudiante' => $request->input('fechestudiante'),
            'sexestudiante' => $request->input('sexestudiante'),
            'ciudad_codciudad' => $request->input('ciudad_codciudad'),
            'barrio_codbarrio' => $request->input('barrio_codbarrio'),
            'programa_codprograma' => $request->input('programa_codprograma'),
        ]);

        return redirect()->route('estudiantes.listado');
    }
    public function destroy(Request $request, $codestudiante){

        $estudiante = Estudiantes::where('codestudiante',$codestudiante)->firstOrFail();
        $estudiante->delete();
        return redirect()->route('estudiantes.listado');
      }

}
