<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    public function nombre_completo(){
        return $this->nombre." ".$this->apellido_paterno." ".$this->apellido_materno;
    }
}
