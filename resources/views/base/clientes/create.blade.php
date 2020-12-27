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
                            <li class="breadcrumb-item"><a href="{{route('clientes.index')}}">Clientes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar novo</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Clientes</h5>
            </div>
            <div class="card-body">
                <form action="{{route('clientes.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Cliente</label>
                        <input type="text" class="form-control" id="cliente" name="cliente" value={{old('cliente')}}>
                        @error('cliente')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tipo">Código Gestware</label>
                        <input type="text" class="form-control" id="codgw" name="codgw" value={{old('codgw')}}>
                        @error('codgw')
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
