<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';

    public function nombre_completo(){
        return $this->nombre." ".$this->apellido_paterno." ".$this->apellido_materno;
    }
}
