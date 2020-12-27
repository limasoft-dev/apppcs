@extends('layouts.base')

@section('content')
<div class="row mt-2 justify-content-md-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6">
                <div class="d-flex flex-row-reverse">
                    <nav aria-label="breadcrumb text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{route('computadores.index')}}">Computadores</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar novo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Computadores</h5>
            </div>
            <div class="card-body">
                <form action="{{route('computadores.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="serialnr">Serial Number</label>
                        <input type="text" class="form-control" id="serialnr" name="serialnr" value={{old('serialnr')}}>
                        @error('serialnr')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="modelo_id">Modelo</label>
                      <select name="modelo_id" class="form-control">
                        <option value="0" selected>Selecione um modelo</option>
                          @foreach ($modelos as $modelo)
                            <option value="{{$modelo->id}}"
                                @if ($modelo->id == old('modelo_id'))
                                    selected
                                @endif>{{$modelo->modelo}} | {{$modelo->marca->marca}} | {{$modelo->tipo->tipo}}</option>
                          @endforeach
                      </select>
                      @error('modelo_id')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                      @enderror
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="limasoft">Origem Limasoft</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="limasoft" id="limasoft" value="1" checked>
                                    <label class="form-check-label" for="limasoft">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="limasoft" id="limasoft" value="0">
                                    <label class="form-check-label" for="limasoft">Não</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="recondicionado">Estado</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="recondicionado" id="recondicionado" value="1" checked>
                                    <label class="form-check-label" for="recondicionado">Recondicionado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="recondicionado" id="recondicionado" value="0">
                                    <label class="form-check-label" for="recondicionado">Novo</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sokey">Sistema Operativo Key</label>
                        <input type="text" class="form-control" id="sokey" name="sokey" value={{old('sokey')}}>
                        @error('sokey')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="fornecedor_id">Fornecedor</label>
                            <select name="fornecedor_id" class="form-control">
                                <option value="0" selected>Selecione um fornecedor</option>
                                @foreach ($fornecedores as $fornecedor)
                                    <option value="{{$fornecedor->id}}"
                                        @if ($fornecedor->id == old('fornecedor_id'))
                                            selected
                                        @endif>{{$fornecedor->fornecedor}}</option>
                                @endforeach
                            </select>
                            @error('fornecedor_id')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="faturac">Fatura Compra</label>
                                <input type="text" class="form-control" id="faturac" name="faturac" value={{old('faturac')}}>
                                @error('faturac')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="datafaturac">Data Fatura Compra</label>
                                <input type="date" class="form-control" id="datafaturac" name="datafaturac" value={{old('datafaturac')}}>
                                @error('datafaturac')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="cliente_id">Cliente</label>
                            <select name="cliente_id" class="form-control">
                                <option value="0" selected>Selecione um cliente</option>
                                @foreach ($clientes as $cliente)
                                    <option value="{{$cliente->id}}"
                                        @if ($cliente->id == old('cliente_id'))
                                            selected
                                        @endif>{{$cliente->cliente}}</option>
                                @endforeach
                            </select>
                            @error('cliente_id')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="faturav">Fatura Venda</label>
                                <input type="text" class="form-control" id="faturav" name="faturav" value={{old('faturav')}}>
                                @error('faturav')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="datafaturav">Data Fatura Venda</label>
                                <input type="date" class="form-control" id="datafaturav" name="datafaturav" value={{old('datafaturav')}}>
                                @error('datafaturav')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="obs">Observações</label>
                        <textarea class="form-control" id="obs" name="obs" rows="5">
                            {{old('obs')}}
                        </textarea>
                        @error('obs')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </form>

            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
