<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';

    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }

}
