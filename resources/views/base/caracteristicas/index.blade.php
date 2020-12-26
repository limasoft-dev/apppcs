@extends('layouts.base')

@section('content')
<div class="row mt-2 justify-content-md-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-row">
                    <a href="{{route('caracteristicas.create')}}" class="btn btn-primary btn-lg">Criar nova</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-row-reverse">
                    <nav aria-label="breadcrumb text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Características</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Características</h5>
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
                        <th scope="col">Característica</th>
                        <th scope="col">Ações</th>
                        <th scope="col">Extras</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($caracteristicas as $caracteristica)
                            <tr>
                                <th scope="row">{{$caracteristica->id}}</th>
                                <td>{{$caracteristica->caracteristica}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm" role="button">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm" role="button">Apagar</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primay btn-sm" role="button">Específicações</a>
                                    <a href="#" class="btn btn-primay btn-sm" role="button">Computadores</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td scope="row" colspan=4>Ainda sem caracteristicas</td>
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
