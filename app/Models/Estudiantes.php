<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ciudades;
use App\Models\Barrios;
use App\Models\Programas;

class Estudiantes extends Model
{
    use HasFactory;
    protected $primaryKey = 'codestudiante';
    protected $guarded= [];

    public function ciudad(){
        return $this->BelongsTo(Ciudades::class,'ciudad_codciudad');
    }
    public function barrio(){
        return $this->BelongsTo(Barrios::class,'barrio_codbarrio');
    }
    public function programa(){
        return $this->BelongsTo(Programas::class,'programa_codprograma');
    }
}
