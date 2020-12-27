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
                            <li class="breadcrumb-item"><a href="{{route('modelos.index')}}">Modelos</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar novo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Modelos</h5>
            </div>
            <div class="card-body">
                <form action="{{route('modelos.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="tipo_id">Tipo</label>
                      <select name="tipo_id" class="form-control">
                        <option value="0" selected>Selecione um tipo</option>
                          @foreach ($tipos as $tipo)
                            <option value="{{$tipo->id}}"
                                @if ($tipo->id == old('tipo_id'))
                                    selected
                                @endif>{{$tipo->tipo}}</option>
                          @endforeach
                      </select>
                      @error('tipo_id')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="marca_id">Marca</label>
                        <select name="marca_id" class="form-control">
                            <option value="0" selected>Selecione uma marca</option>
                            @foreach ($marcas as $marca)
                              <option value="{{$marca->id}}"
                                  @if ($marca->id == old('marca_id'))
                                      selected
                                  @endif>{{$marca->marca}}</option>
                            @endforeach
                        </select>
                        @error('marca_id')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                      </div>

                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" value={{old('modelo')}}>
                        @error('modelo')
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
