<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnosticos';

    public function enfermedad(){
        return $this->belongsTo(Enfermedad::class,'id_enfermedad');
    }

    public function prueba(){
        return $this->belongsTo(PruebaDeLaboratorio::class,'id_prueba');
    }

    public function cita(){
        return $this->belongsTo(Cita::class,'id_cita');
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class,'id_paciente');
    }
}
