<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TratamientoEnfermedad extends Model
{
    protected $table = 'tratamientos_enfermedades';

    public function tratamiento(){
        return $this->belongsTo(Tratamiento::class,'tratamiento_id');
    }
}
