@extends('layouts.master')

@section('contentEditIntervention')
    <div class="modal-content mt-5 mb-5">
        <div class="modal-header">
            <h5 class="modal-title fs-3" id="staticBackdropLabel">Atualizar Intervenção Número {{ $intervention->id }}</h5>
        </div>
        <div class="modal-body">
            <form action="{{ route('interventions.update', $intervention->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-form-label" for="">Pedido Efetuado em</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="viatura_ou_loja" value="Loja"
                                            id="viatura_ou_loja_loja"
                                            {{ $intervention->viatura_ou_loja == 'Loja' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="viatura_ou_loja_loja">Loja</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="viatura_ou_loja"
                                            value="Cliente" id="viatura_ou_loja_cliente"
                                            {{ $intervention->viatura_ou_loja == 'Cliente' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="viatura_ou_loja_cliente">Cliente</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="veiculo_dropdown">
                            <label class="col-form-label" for="v">Escolha o veículo utilizado</label>
                            <select name="veiculosId" id="veiculosId" class="form-control">
                                <option value="">Escolher matrícula</option>
                                @foreach ($veiculos as $veiculo)
                                    <option {{ $veiculo->id == $intervention->veiculos_id ? 'selected' : '' }}
                                        value="{{ $veiculo->id }}">{{ $veiculo->marca }}-{{ $veiculo->matricula }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Escolha o cliente</label>
                            <select name="client_id" id="client_id" class="form-control">
                                <option value="">Escolher Cliente</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Marcação CE</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="marcacao_CE"
                                            id="marcacao_CE_sim" value="1" @if (old('active') == 1)  @endif
                                            {{ $intervention->marcacao_CE == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="marcacao_CE_sim">Sim</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="marcacao_CE"
                                            id="marcacao_CE_nao" value="0" @if (old('active') == 0)  @endif
                                            {{ $intervention->marcacao_CE == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="marcacao_CE_nao">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Número Interno</label>
                            <input name="nr_interno" id="nr_interno" type="number" class="form-control" placeholder="ex: 1"
                                required value="{{ $intervention->nr_interno }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="tiposFluidosId">Tipo de Agente Extintor</label>
                            <select name="tiposFluidosId" id="tiposFluidosId" class="form-control">
                                <option value="">Escolher Tipo de Fluído</option>
                                @foreach ($tiposFluidos as $tiposFluido)
                                    <option {{ $tiposFluido->id == $intervention->tipo_fluidos_id ? 'selected' : '' }}
                                        value="{{ $tiposFluido->id }}">{{ $tiposFluido->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="nr_serie">Número de Série</label>
                            <input name="nr_serie" id="nr_serie" type="text" class="form-control"
                                placeholder="ex: 1ABY563TR" required value="{{ $intervention->nr_serie }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="capacidade_kg">Capacidade em kg</label>
                            <input name="capacidade_kg" id="capacidade_kg" type="number" min="0" step="0.001"
                                class="form-control" placeholder="ex: 15" required
                                value="{{ $intervention->capacidade_kg }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Pressão Permanente</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="persao_permanente"
                                            id="persao_permanente_sim" value="1"
                                            @if (old('active') == 1)  @endif
                                            {{ $intervention->persao_permanente == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="persao_permanente_sim">Sim</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="persao_permanente"
                                            id="persao_permanente_nao" value="0"
                                            @if (old('active') == 0)  @endif
                                            {{ $intervention->persao_permanente == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="persao_permanente_nao">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="nome_fabricante">Nome do Fabricante</label>
                            <input name="nome_fabricante" id="nome_fabricante" type="text" class="form-control"
                                placeholder="ex: Empresa X" required value="{{ $intervention->nome_fabricante }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="ano_fabrico">Data de Fabrico</label>
                            <input name="ano_fabrico" id="ano_fabrico" type="date" class="form-control"
                                max="2023-07-23" required value="{{ $intervention->ano_fabrico }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="localizacao">Localização</label>
                            <input name="localizacao" id="localizacao" type="text" class="form-control"
                                placeholder="ex:Rua X, Nº XXX, andar X" required
                                value="{{ $intervention->localizacao }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="data_ultimo_carregamento">Último Carregamento</label>
                            <input name="data_ultimo_carregamento" id="data_ultimo_carregamento" type="date"
                                class="form-control" max="2023-07-23" required
                                value="{{ $intervention->data_ultimo_carregamento }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="data_ultima_prova_hidraulica">Último teste
                                Hidraulico</label>
                            <input name="data_ultima_prova_hidraulica" id="data_ultima_prova_hidraulica" type="date"
                                class="form-control" max="2023-07-23" required
                                value="{{ $intervention->data_ultima_prova_hidraulica }}">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="manutencao_MNT">Manutenção MNT</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="manutencao_MNT"
                                            id="manutencao_MNT_sim" value="1"
                                            @if (old('active') == 1)  @endif
                                            {{ $intervention->manutencao_MNT == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="manutencao_MNT_sim">Sim</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="manutencao_MNT"
                                            id="manutencao_MNT_nao" value="0"
                                            @if (old('active') == 0)  @endif
                                            {{ $intervention->manutencao_MNT == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="manutencao_MNT_nao">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="peso_CO2_kg">Peso CO2 em kg</label>
                            <input name="peso_CO2_kg" id="peso_CO2_kg" type="number" min="0" step="0.001"
                                class="form-control" placeholder="ex:15" required
                                value="{{ $intervention->peso_CO2_kg }}">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div style="border-left: 1px solid #ddd; height:100%;">
                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Carregamento MNT AD</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="carregamento_MNT_AD"
                                                id="carregamento_MNT_AD_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->carregamento_MNT_AD == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="carregamento_MNT_AD_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="carregamento_MNT_AD"
                                                id="carregamento_MNT_AD_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->carregamento_MNT_AD == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="carregamento_MNT_AD_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="tipo">Tipo</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipo" id="tipo"
                                                value="C" {{ $intervention->tipo == 'C' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="tipo">C</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="tipo" id="tipo"
                                                value="S" {{ $intervention->tipo == 'S' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="tipo">S</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Prova Hidraulica</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="prova_hidraulica"
                                                id="prova_hidraulica_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->prova_hidraulica == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="prova_hidraulica_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="prova_hidraulica"
                                                id="prova_hidraulica_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->prova_hidraulica == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="prova_hidraulica_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Selo de Segurança</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selo_seguranca"
                                                id="selo_seguranca_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->selo_seguranca == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="selo_seguranca_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="selo_seguranca"
                                                id="selo_seguranca_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->selo_seguranca == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="selo_seguranca_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">O-Ring</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="O_Ring" value="1"
                                                id="O_Ring_sim" @if (old('active') == 1)  @endif
                                                {{ $intervention->O_Ring == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="O_Ring_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="O_Ring" value="0"
                                                id="O_Ring_nao" @if (old('active') == 0)  @endif
                                                {{ $intervention->O_Ring == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="O_Ring_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Cavilha</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cavilha" value="1"
                                                id="cavilha_sim" @if (old('active') == 1)  @endif
                                                {{ $intervention->cavilha == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="cavilha_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="cavilha" value="0"
                                                id="cavilha_nao" @if (old('active') == 0)  @endif
                                                {{ $intervention->cavilha == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="cavilha_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Manometro</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manometro"
                                                id="manometro_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->manometro == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="manometro_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="manometro"
                                                id="manometro_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->manometro == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="manometro_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Difusor</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="difusor"
                                                id="difusor_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->difusor == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="difusor_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="difusor"
                                                id="difusor_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->difusor == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="difusor_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Base Plástica</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="base_plastica"
                                                id="base_plastica_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->base_plastica == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="base_plastica_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="base_plastica"
                                                id="base_plastica_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->base_plastica == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="base_plastica_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Rótulo</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rotulo"
                                                id="rotulo_sim" value="1" @if (old('active') == 1)  @endif
                                                {{ $intervention->rotulo == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rotulo_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rotulo"
                                                id="rotulo_nao" value="0" @if (old('active') == 0)  @endif
                                                {{ $intervention->rotulo == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rotulo_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Sparkles</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sparklets_CO2"
                                                id="sparklets_CO2_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->sparklets_CO2 == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="sparklets_CO2_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="sparklets_CO2"
                                                id="sparklets_CO2_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->sparklets_CO2 == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="sparklets_CO2_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Aprovado</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aprovado"
                                                id="aprovado_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->aprovado == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="aprovado_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="aprovado"
                                                id="aprovado_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->aprovado == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="aprovado_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Fora de Serviço</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="servico"
                                                id="servico_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->servico == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="servico_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="servico"
                                                id="servico_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->servico == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="servico_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Novo</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="extintor_novo"
                                                id="extintor_novo_sim" value="1"
                                                @if (old('active') == 1)  @endif
                                                {{ $intervention->extintor_novo == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="extintor_novo_sim">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="extintor_novo"
                                                id="extintor_novo_nao" value="0"
                                                @if (old('active') == 0)  @endif
                                                {{ $intervention->extintor_novo == 0 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="extintor_novo_nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="motivo_rejeitado">Motivo de Rejeição</label>
                                <textarea name="motivo_rejeitado" id="motivo_rejeitado" type="text" class="form-control"
                                    placeholder="ex: Foi rejeitado porque..." autocomplete="false">{{ $intervention->motivo_rejeitado }}</textarea>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="observacao">Observações</label>
                                <textarea name="observacao" id="observacao" type="text" class="form-control"
                                    placeholder="Escrever observações extra" autocomplete="false">{{ $intervention->observacao }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-secondary" href="{{ route('interventions.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Atualizar Intervenção</button>
                </div>
        </div>
    </div>
@endsection
