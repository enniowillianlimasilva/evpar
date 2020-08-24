<template>
    <div class="container md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Gerenciamento de Pacientes</div>

                    <div class="card-body">
                        
                        <form @submit.prevent="saveData">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="cpf">CPF</label>
                                        <input v-model="form.cpf" type="text" class="form-control" name="cpf" id="cpf" maxlength="14" placeholder="999.999.999-99">
                                        <span class="text-danger" v-if="form.errors.has('cpf')" v-text="form.errors.get('cpf')"></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input v-model="form.nome" type="text" class="form-control" name="nome" id="nome">
                                        <span class="text-danger" v-if="form.errors.has('nome')" v-text="form.errors.get('nome')"></span>
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="rg">RG</label>
                                        <input v-model="form.rg" type="text" class="form-control"  name="rg" id="rg">
                                        <span class="text-danger" v-if="form.errors.has('rg')" v-text="form.errors.get('rg')"></span>
                                    </div>
                                </div>
                                
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="cartao_sus">Cartão SUS</label>
                                        <input v-model="form.cartao_sus" type="text" class="form-control"  name="cartao_sus" id="cartao_sus" maxlength="16">
                                        <span class="text-danger" v-if="form.errors.has('cartao_sus')" v-text="form.errors.get('cartao_sus')"></span>
                                    </div>
                                </div>
                                
                            </div>
                           
                            <div class="row">
                                <div class="col-2"><div class="form-group">
                                    <label for="sexo">Sexo</label>
                                    <select v-model="form.sexo" name="sexo" id="sexo" class="form-control">
                                        <option value="M">Masculino</option>
                                        <option value="F">Feminino</option>
                                    </select>
                                    <span class="text-danger" v-if="form.errors.has('sexo')" v-text="form.errors.get('sexo')"></span>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="data_nascimento">Data de nascimento</label>
                                        <input v-model="form.data_nascimento" type="date" class="form-control"  name="data_nascimento" id="data_nascimento">
                                        <span class="text-danger" v-if="form.errors.has('data_nascimento')" v-text="form.errors.get('data_nascimento')"></span>
                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="nome_mae">Nome da mãe</label>
                                        <input v-model="form.nome_mae" type="text" class="form-control"  name="nome_mae" id="nome_mae">
                                        <span class="text-danger" v-if="form.errors.has('nome_mae')" v-text="form.errors.get('nome_mae')"></span>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="telefone">Telefone</label>
                                        <input v-model="form.telefone" type="text" class="form-control"  name="telefone" id="telefone" placeholder="(99)99999-9999" maxlength="14">
                                        <span  class="text-danger" v-if="form.errors.has('telefone')" v-text="form.errors.get('telefone')"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="cep">CEP</label>
                                        <input v-model="form.cep" type="text" class="form-control"  name="cep" id="cep" maxlength="10" placeholder="99.999-999">
                                        <span class="text-danger" v-if="form.errors.has('cep')" v-text="form.errors.get('cep')"></span>
                                    </div>
                                </div>

                                <div class="col-4">
                                     <div class="form-group">
                                        <label for="logradouro">Logradouro</label>
                                        <input v-model="form.logradouro" type="text" class="form-control"  name="logradouro" id="logradouro">
                                        <span class="text-danger" v-if="form.errors.has('logradouro')" v-text="form.errors.get('logradouro')"></span>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="numero">Número</label>
                                        <input v-model="form.numero" type="text" class="form-control"  name="numero" id="numero">
                                        <span class="text-danger" v-if="form.errors.has('numero')" v-text="form.errors.get('numero')"></span>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="quadra">Quadra</label>
                                        <input v-model="form.quadra" type="text" class="form-control"  name="quadra" id="quadra">
                                        <span class="text-danger" v-if="form.errors.has('quadra')" v-text="form.errors.get('quadra')"></span>
                                    </div>
                                </div>
                                
                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="lote">Lote</label>
                                        <input v-model="form.lote" type="text" class="form-control"  name="lote" id="lote">
                                        <span class="text-danger" v-if="form.errors.has('lote')" v-text="form.errors.get('lote')"></span>
                                    </div>
                                </div>
                                
  
                            </div>
                            
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="complemento">Complemento</label>
                                        <input v-model="form.complemento" type="text" class="form-control"  name="complemento" id="complemento">
                                        <span class="text-danger" v-if="form.errors.has('complemento')" v-text="form.errors.get('complemento')"></span>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="bairro">Bairro</label>
                                        <input v-model="form.bairro" type="text" class="form-control"  name="bairro" id="bairro">
                                        <span class="text-danger" v-if="form.errors.has('bairro')" v-text="form.errors.get('bairro')"></span>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="cidade_id">Cidade</label>
                                        <select v-model="form.cidade_id" name="cidade_id" id="cidade_id" class="form-control">
                                            <option v-for="cidade in cidades" :value="cidade.id" :key="cidade.id">
                                                {{ cidade.nome }}
                                            </option>
                                         </select>
                                         <span class="text-danger" v-if="form.errors.has('cidade_id')" v-text="form.errors.get('cidade_id')"></span>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="form-group">
                                        <label for="estado_id">Estado</label>
                                        <select v-model="form.estado_id"  name="estado_id" id="estado_id" class="form-control">
                                            <option v-for="estado in estados" :value="estado.id" :key="estado.id">
                                                {{ estado.nome }}
                                            </option>
                                        </select>
                                        <span class="text-danger" v-if="form.errors.has('estado_id')" v-text="form.errors.get('estado_id')"></span>
                                    </div>
                                </div>
                            </div>
                        
                            <button v-if="isEdit==0" type="submit" class="btn btn-success">Salvar</button>                               
                                                      
                        </form>

                            <button v-if="isEdit==1" v-on:click="updatePaciente()" class="btn btn-success">Atualizar</button>
                        
                        <hr>
                        <h2>Lista de Pacientes</h2>
                        
                        <div class="row mt-3">
                            <div class="col-6">
                                <input class="form-control input" type="text" v-model="tableData.search" placeholder="Digite o nome ou CPF"
                                        @input="getPacientes()">
                            </div>

                            <div class="col-3">
                                <select class="form-control" v-model="tableData.status" @change="getPacientes()">
                                    <option value="1">Ativo</option>
                                    <option value="0">Inativo</option>
                                </select>
                            </div>
                                                                    
                            <div class="col-3">
                                <select class="form-control" v-model="tableData.length" @change="getPacientes()">
                                    <option v-for="(records, index) in perPage" :key="index" :value="records">{{records}}</option>
                                </select>
                            </div>
                                                
                        </div>
                        <div class="row py-4">
                            <datatable :columns="columns" :sortKey="sortKey" :sortOrders="sortOrders" @sort="sortBy">
                                <tbody>
                                    <tr v-for="p in pacientes" :key="p.id">
                                        <td>{{p.cpf}}</td>
                                        <td>{{p.nome}}</td>
                                        <td>{{p.data_nascimento}}</td>
                                        <td>
                                            <button v-on:click="editPaciente(p)" class="btn btn-warning">Editar</button>
                                            <button v-on:click="deletePaciente(p)" class="btn btn-danger">Excluir</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </datatable>
                            <pagination :pagination="pagination"
                                        @prev="getPacientes(pagination.prevPageUrl)"
                                        @next="getPacientes(pagination.nextPageUrl)">
                            </pagination>
                        </div>

                    </div>
                </div>
            </div> 
        </div>
    </div>
</template>

<script>

import Datatable from './Datatable.vue';
import Pagination from './Pagination.vue';

    export default {    

        components: { datatable: Datatable, pagination: Pagination },
        data(){

            let sortOrders = {};

            let columns = [
                {width: '20%', label: 'CPF', name: 'cpf' },
                {width: '40%', label: 'Nome', name: 'nome'},
                {width: '20%', label: 'Data de Nascimento', name: 'data_nascimento'}
                
            ];

            columns.forEach((column) => {
            sortOrders[column.name] = -1;
            });
            return{
                isEdit: 0,
                pacientes: [],
                estados: [],
                cidades: [],
                form: new Form({
                    id : '',
                    cpf: '',
                    nome: '',
                    rg: '',
                    cartao_sus: '',
                    sexo: '',
                    data_nascimento: '',
                    nome_mae: '',
                    telefone: '',
                    status: '1',
                    cep: '',
                    logradouro: '',
                    numero: '',
                    quadra: '',
                    lote: '',
                    complemento: '',
                    bairro: '',
                    cidade_id: '',
                    estado_id: '',
                }),
                columns: columns,
                sortKey: 'deadline',
                sortOrders: sortOrders,
                perPage: ['5','10', '20', '30'],
                tableData: {
                    draw: 0,
                    length: 10,
                    search: '',
                    column: 0,
                    dir: 'desc',
                    status: '1',
                },
                pagination: {
                    lastPage: '',
                    currentPage: '',
                    total: '',
                    lastPageUrl: '',
                    nextPageUrl: '',
                    prevPageUrl: '',
                    from: '',
                    to: ''
                },
        }
            
        },
        methods:{


            configPagination(data) {
                this.pagination.lastPage = data.last_page;
                this.pagination.currentPage = data.current_page;
                this.pagination.total = data.total;
                this.pagination.lastPageUrl = data.last_page_url;
                this.pagination.nextPageUrl = data.next_page_url;
                this.pagination.prevPageUrl = data.prev_page_url;
                this.pagination.from = data.from;
                this.pagination.to = data.to;
            },
            sortBy(key) {
                this.sortKey = key;
                this.sortOrders[key] = this.sortOrders[key] * -1;
                this.tableData.column = this.getIndex(this.columns, 'name', key);
                this.tableData.dir = this.sortOrders[key] === 1 ? 'asc' : 'desc';
                this.getProjects();
            },
            getIndex(array, key, value) {
                return array.findIndex(i => i[key] == value)
            },

        getPacientes(url = '/api/pacientes') {
            this.tableData.draw++;
            axios.get(url, {params: this.tableData})
                .then(response => {
                    let data = response.data;
                    if (this.tableData.draw == data.draw) {
                        this.pacientes = data.data.data;
                        console.log(this.pacientes);
                        this.configPagination(data.data);
                    }
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
        getCidades() {
            axios.get('api/cidades')
                .then(res => {
                   this.cidades = res.data
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
        
        getEstados() {
            axios.get('api/estados')
                .then(res => {
                   this.estados = res.data
                })
                .catch(errors => {
                    console.log(errors);
                });
        },
            
            saveData(){
                let data = new FormData();
                data.append('cpf',this.form.cpf)
                data.append('nome',this.form.nome)
                data.append('rg',this.form.rg)
                data.append('cartao_sus',this.form.cartao_sus)
                data.append('sexo',this.form.sexo)
                data.append('data_nascimento',this.form.data_nascimento)
                data.append('nome_mae',this.form.nome_mae)
                data.append('telefone',this.form.telefone)
                data.append('status','1')
                data.append('cep',this.form.cep)
                data.append('logradouro',this.form.logradouro)
                data.append('numero',this.form.numero)
                data.append('quadra',this.form.quadra)
                data.append('lote',this.form.lote)
                data.append('complemento',this.form.complemento)
                data.append('bairro',this.form.bairro)
                data.append('cidade_id',this.form.cidade_id)
                data.append('estado_id',this.form.estado_id)

                axios.post('/api/pacientes',data).then((res)=>{
                    this.form.reset()
                    this.getPacientes()
                    swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Paciente cadastrado com sucesso!',
                        showConfirmButton: false,
                        timer: 2500
                    })
                }).catch((error)=>{
                    this.form.errors.record(error.response.data.errors)
                    console.log(error)
                })

                

            },
            
            deletePaciente(p){
                let data = new FormData();
                data.append('_method', 'DELETE')
                
                swal.fire({
                title: 'Deseja realmente excluir este paciente?',
                text: "Esta operação excluirá todos os dados deste paciente.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, excluir!'
                }).then((result) => {
                if (result.value) {
                    
                        axios.post('/api/pacientes/'+p.id, data).then((res) =>{
                         swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                        this.getPacientes();
                    }).catch((error) => {
                        this.form.errors.record(error.response.data.errors)
                    })


                }
                })
                
                
            },
            editPaciente(p){
                
                this.isEdit = 1
                this.form.id = p.id
                this.form.cpf = p.cpf
                this.form.nome = p.nome
                this.form.rg = p.rg
                this.form.cartao_sus = p.cartao_sus
                this.form.sexo = p.sexo
                this.form.data_nascimento = p.data_nascimento
                this.form.nome_mae = p.nome_mae
                this.form.telefone = p.telefone

                this.form.cep = p.endereco.cep
                this.form.logradouro = p.endereco.logradouro
                this.form.numero = p.endereco.numero
                this.form.quadra = p.endereco.quadra
                this.form.lote = p.endereco.lote
                this.form.complemento = p.endereco.complemento
                this.form.bairro = p.endereco.bairro
                this.form.cidade_id = p.endereco.cidade_id
                this.form.estado_id = p.endereco.estado_id

            },
            updatePaciente(){
                
                let data = new FormData();
                data.append('_method', 'PUT')
                data.append('cpf',this.form.cpf)
                data.append('nome',this.form.nome)
                data.append('rg',this.form.rg)
                data.append('cartao_sus',this.form.cartao_sus)
                data.append('sexo',this.form.sexo)
                data.append('data_nascimento',this.form.data_nascimento)
                data.append('nome_mae',this.form.nome_mae)
                data.append('telefone',this.form.telefone)
                data.append('status','1')
                data.append('cep',this.form.cep)
                data.append('logradouro',this.form.logradouro)
                data.append('numero',this.form.numero)
                data.append('quadra',this.form.telefone)
                data.append('lote',this.form.lote)
                data.append('complemento',this.form.complemento)
                data.append('bairro',this.form.bairro)
                data.append('cidade_id',this.form.cidade_id)
                data.append('estado_id',this.form.estado_id)

                axios.post('/api/pacientes/'+this.form.id, data).then((res)=>{
                    swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: 'Paciente atualizado com sucesso!',
                        showConfirmButton: false,
                        timer: 2500
                    })
                    this.form.reset()
                    this.getPacientes();
                    this.isEdit = 0
                    
                })
                .catch((error) => {
                    console.log(error)
                    this.form.errors.record(error.response.data.errors)
                })
            }
        },
        mounted() {
            
            this.columns.forEach((column) => {
            this.sortOrders[column.name] = -1;
            }),
            this.getPacientes();
            this.getCidades();
            this.getEstados();

        }
    }
</script>
