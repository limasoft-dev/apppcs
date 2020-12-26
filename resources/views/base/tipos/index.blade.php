@extends('layouts.base')

@section('content')
<div class="row mt-2 justify-content-md-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-row">
                    <a href="{{route('tipos.create')}}" class="btn btn-primary btn-lg">Criar novo</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-row-reverse">
                    <nav aria-label="breadcrumb text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tipos de Computadores</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Tipos de Computadores</h5>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-hover table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ações</th>
                        <th scope="col">Extras</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($tipos as $tipo)
                            <tr>
                                <th scope="row">{{$tipo->id}}</th>
                                <td>{{$tipo->tipo}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm" role="button">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm" role="button">Apagar</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primay btn-sm" role="button">Modelos</a>
                                    <a href="#" class="btn btn-primay btn-sm" role="button">Computadores</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td scope="row" colspan=4>Ainda sem tipos</td>
                            </tr>
                        @endforelse
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
