@extends('layouts.master')

@section('contentCreateIntervention')
    <div class="modal-content mt-5 mb-5">
        <div class="modal-header">
            <h1 class="modal-title fs-3" id="staticBackdropLabel">Registrar Nova Intervenção</h1>
        </div>
        <div class="modal-body">
            <form action="" method="POST">
                @csrf

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="col-form-label" for="">Pedido Efetuado em</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="1">
                                        <label class="form-check-label" for="">Loja</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="0">
                                        <label class="form-check-label" for="">Cliente</label>
                                    </div>
                                </div>
                            </div>
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
                                        <input class="form-check-input" type="radio" name="" value="1">
                                        <label class="form-check-label" for="">Sim</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="0">
                                        <label class="form-check-label" for="">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Número Interno</label>
                            <input name="internalNumber" id="internalNumber" type="number" class="form-control"
                                value="" placeholder="ex: 1" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Tipo de Agente Extintor</label>
                            <select name="" id="" class="form-control">
                                <option value="">Escolher Tipo de Fluído</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Número de Série</label>
                            <input name="serialNumber" id="serialNumber" type="text" class="form-control" value=""
                                placeholder="ex: 1ABY563TR" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Capacidade em kg</label>
                            <input name="capacity" id="capacity" type="number" class="form-control" value=""
                                placeholder="ex: 15" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Pressão Permanente</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="1">
                                        <label class="form-check-label" for="">Sim</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="0">
                                        <label class="form-check-label" for="">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Nome do Fabricante</label>
                            <input name="factoryName" id="factoryName" type="text" class="form-control"
                                value="" placeholder="ex: Empresa X" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Data de Fabrico</label>
                            <input name="factoryDate" id="factoryDate" type="date" class="form-control"
                                value="" max="2023-07-23" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Localização</label>
                            <input name="localization" id="localization" type="text" class="form-control"
                                value="" placeholder="ex:Rua X, Nº XXX, andar X" required=""
                                autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Último Carregamento</label>
                            <input name="lastCharged" id="lastCharged" type="date" class="form-control"
                                value="" max="2023-07-23" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Último teste Hidraulico</label><input
                                name="lastHydraulicTest" id="lastHydraulicTest" type="date" class="form-control"
                                value="" max="2023-07-23" required="" autocomplete="false">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Manutenção MNT</label>
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="1">
                                        <label class="form-check-label" for="">Sim</label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" value="0">
                                        <label class="form-check-label" for="">Não</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label" for="">Peso CO2 em kg</label>
                            <input name="co2Weight" id="co2Weight" type="number" class="form-control" value=""
                                placeholder="ex:15" required="" autocomplete="false">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div style="border-left: 1px solid #ddd; height:100%;">
                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Carregamento MNT AD</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Tipo</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">C</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">S</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Prova Hidraulica</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Selo de Segurança</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">O-Ring</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Cavilha</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Manometro</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Difusor</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Base Plástica</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Rótulo</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Sparkles</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Aprovado</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Fora de Serviço</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Novo</label>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="1">
                                            <label class="form-check-label" for="">Sim</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name=""
                                                value="0">
                                            <label class="form-check-label" for="">Não</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Motivo de Rejeição</label>
                                <textarea name="rejectedMotive" id="rejectedMotive" type="text" class="form-control"
                                    placeholder="ex: Foi rejeitado porque..." autocomplete="false"></textarea>
                            </div>

                            <div class="form-group pl-3">
                                <label class="col-form-label" for="">Observações</label>
                                <textarea name="observations" id="observations" type="text" class="form-control"
                                    placeholder="Escrever observações extra" autocomplete="false"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-secondary" href="{{ route('interventions.index') }}">Voltar Atrás</a>
                    <button type="submit" class="btn btn-success">Registrar Intervenção</button>
                </div>
            </form>
        </div>
    </div>
@endsection
