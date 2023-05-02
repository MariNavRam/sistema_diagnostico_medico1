<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';

    public function consultorio(){
        return $this->belongsTo(Consultorio::class,'consultorio_id');
    }

    public function medico(){
        return $this->belongsTo(User::class,'medico_id');
    }

    public function paciente(){
        return $this->belongsTo(Paciente::class,'paciente_id');
    }
}
