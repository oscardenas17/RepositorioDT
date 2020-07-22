@extends('layouts.app')

@section('botones')

    <a href="{{ route('repositorios.index') }}"  class="btn btn-primary mr-2 text-white">Volver</a>

@endsection

@section('content')

    <h2 class="text-center mb-5">Crear Nuevo Repo</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
        <form method="POST" action="{{ route('repositorios.store') }}" novalidate>
            @csrf
                <div class="form-group">
                    <label for="titulo">Titulo </label>

                    <input type="text" 
                    name="titulo" 
                    class="form-control  @error('titulo') is-invalid @enderror"
                    id="titulo"
                    placeholder="Titulo Repositorio"
                    value="{{ old('titulo')}}"
                    />    
                    
                    @error('titulo')
                       <span class="invalid-feedback d-block" role="alert">
                           <strong>{{$message}} </strong>
                       </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </div>
            </form>
        </div>
    </div>
 

@endsection
