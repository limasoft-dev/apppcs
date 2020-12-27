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
                            <li class="breadcrumb-item"><a href="{{route('caracteristicas.index')}}">Características</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Criar nova</li>
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
                <form action="{{route('caracteristicas.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Característica</label>
                        <input type="text" class="form-control" id="caracteristica" name="caracteristica" value={{old('caracteristica')}}>
                        @error('caracteristica')
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
