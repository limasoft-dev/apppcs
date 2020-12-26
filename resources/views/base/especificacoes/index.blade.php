@extends('layouts.base')

@section('content')
<div class="row mt-2 justify-content-md-center">
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex flex-row">
                    <a href="{{route('especificacoes.create')}}" class="btn btn-primary btn-lg">Criar nova</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-row-reverse">
                    <nav aria-label="breadcrumb text-right">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Inicio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Especificações</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="card">

            <div class="card-header">
                <h5 class="card-title">Especificações</h5>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @forelse ($caracteristicas as $caracteristica)
                    <p><b>{{$caracteristica->caracteristica}}</b></p>
                    <table class="table table-hover table-sm">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Especificacao</th>
                            <th scope="col">Acoes</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($caracteristica->especificacoes as $especificacao)
                                <tr>
                                    <th scope="col">{{$especificacao->id}}</th>
                                    <td scope="col">{{$especificacao->especificacao}}</td>
                                    <td scope="col">
                                        <a href="#" class="btn btn-warning btn-sm" role="button">Editar</a>
                                        <a href="#" class="btn btn-danger btn-sm" role="button">Apagar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Sem especificacoes definidas</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                @empty
                    <p>Sem caracteristicas nao pode criar especificacoes</p>
                @endforelse

                
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
@endsection
