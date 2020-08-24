<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use Illuminate\Http\Request;
use App\Paciente;
use App\Endereco;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index2(){
        return Paciente::with('endereco')->get();
    }

    public function index(Request $request)
    {
        $columns = ['cpf', 'nome', 'data_nascimento'];

        $length = $request->input('length');
        $column = $request->input('column'); //Index
        $dir = $request->input('dir');
        $status = $request->input('status');
        $searchValue = $request->input('search');

        $query = Paciente::with('endereco')->where('status',$status)->orderBy($columns[$column], $dir);

        if ($searchValue) {
            $query->where(function($query) use ($searchValue) {
                $query->where('cpf', 'like', '%' . $searchValue . '%')
                ->orWhere('nome', 'like', '%' . $searchValue . '%');
            });
        }

        $projects = $query->paginate($length);
        return ['data' => $projects, 'draw' => $request->input('draw')];
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteRequest $request)
    {
        
        $paciente = new Paciente();

        $paciente->cpf = $request->input('cpf');
        $paciente->nome = $request->input('nome');
        $paciente->rg = $request->input('rg');
        $paciente->cartao_sus = $request->input('cartao_sus');
        $paciente->sexo = $request->input('sexo');
        $paciente->data_nascimento = $request->input('data_nascimento');
        $paciente->nome_mae = $request->input('nome_mae');
        $paciente->telefone = $request->input('telefone');
        $paciente->status = $request->input('status');
        $paciente->save();

        $endereco = new Endereco();

        $endereco->paciente_id = $paciente->id; 
        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->quadra = $request->quadra;
        $endereco->lote = $request->lote;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade_id = $request->cidade_id;
        $endereco->estado_id = $request->estado_id;
        
        $endereco->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Paciente::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteRequest $request, $id)
    {

        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        $endereco = Endereco::find($paciente->endereco->id);

        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->quadra = $request->quadra;
        $endereco->lote = $request->lote;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade_id = $request->cidade_id;
        $endereco->estado_id = $request->estado_id;
        
        $endereco->save();
        

        return 200;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->status = 0;
        $paciente->save();
        return 200;
    }
}
