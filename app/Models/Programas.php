<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiantes;
use App\Models\Facultades;


class Programas extends Model
{
    use HasFactory;

    protected $primaryKey = 'codprograma';
    protected $guarded= [];

    public function estudiante()
    {
        return $this->hasOne(Estudiantes::class);
    }

    public function facultad(){
        return $this->BelongsTo(Facultades::class,'facultad_codfacultad');
    }
}
