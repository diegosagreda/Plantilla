<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrios extends Model
{
    use HasFactory;

    protected $primaryKey = 'codbarrio';
    protected $guarded= [];

    public function estudiante()
    {
        return $this->hasOne(Estudiantes::class);
    }
}
