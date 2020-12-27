@extends('layouts.base')

@section('content')
<div class="row mt-2 justify-content-md-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-row">
                    <a href="{{route('modelos.create')}}" class="btn btn-primary btn-lg">Criar novo</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-row-reverse">
                    <nav aria-label="breadcrumb text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modelos</li>
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
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="accordion" id="marcas">
                    @forelse ($marcas as $marca)
                        <div class="card">
                            <div class="card-header" id="{{$marca->id}}">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$marca->id}}" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="badge bg-success text-white"><strong>{{$marca->marca}}</strong> <br>{{$marca->modelos->count()}} Modelos</span>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse{{$marca->id}}" class="collapse" aria-labelledby="{{$marca->id}}" data-parent="#marcas">
                                <div class="card-body">
                                    <table class="table table-hover table-sm">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Modelo</th>
                                            <th scope="col">Ações</th>
                                            <th scope="col">Extras</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($marca->modelos as $modelo)
                                                <tr>
                                                    <th scope="row">{{$modelo->id}}</th>
                                                    <td>{{$modelo->tipo->tipo}}</td>
                                                    <td>{{$modelo->modelo}}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-warning btn-sm" role="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                          </svg></a>
                                                        <a href="#" class="btn btn-danger btn-sm" role="button">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                          </svg></a>
                                                    </td>
                                                    <td>

                                                        <a href="#" class="btn btn-primay btn-sm" role="button">Computadores</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td scope="row" colspan=4>Ainda sem modelos</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @empty
                        Comece por definir marcas
                    @endforelse




                  </div>





            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
