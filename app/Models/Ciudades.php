<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Estudiantes;

class Ciudades extends Model
{
    use HasFactory;
    protected $primaryKey = 'codciudad';
    protected $guarded= [];

    public function estudiante()
    {
        return $this->hasOne(Estudiantes::class);
    }
}
