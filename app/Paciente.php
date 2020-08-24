<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'cpf',
        'nome',
        'rg',
        'cartao_sus',
        'sexo',
        'data_nascimento',
        'nome_mae',
        'telefone',
        'status'
    ];

    public function endereco(){
        return $this->hasOne(Endereco::class);
    }
}
