@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css" integrity="sha512-sC2S9lQxuqpjeJeom8VeDu/jUJrVfJM7pJJVuH9bqrZZYqGe7VhTASUb3doXVk6WtjD0O4DTS+xBx2Zpr1vRvg==" crossorigin="anonymous" />
@endsection

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
                    class="form-control @error('titulo') is-invalid @enderror"  
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
                   <label for="categoria">Categoria</label>

                   <select name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria">

                             <option value="">--Seleccione</option>
                                @foreach($categorias as $id => $categoria)
                            <option 
                                value="{{ $id }}"  
                                {{ old('categoria') == $id ? 'selected' : ''}}>
                                {{$categoria}} 
                            </option>          
                            
                        @endforeach
                    </select>

                    @error('categoria')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}} </strong>
                        </span>
                    @enderror
                </div>

                {{-- //editor} --}}
                <div class="form-group mt-3">
                    <label for="contenido">Contenido</label>
                    <input type="hidden" id="contenido" name="contenido" value="{{ old('contenido') }}">
                    <trix-editor class="form-control @error('contenido') is-invalid @enderror" id="categoria"></trix-editor>

                    @error('contenido')
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
 
    @section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" integrity="sha512-EkeUJgnk4loe2w6/w2sDdVmrFAj+znkMvAZN6sje3ffEDkxTXDiPq99JpWASW+FyriFah5HqxrXKmMiZr/2iQA==" crossorigin="anonymous"></script>
    @endsection


@endsection
