@extends('layouts.app')

@section('botones')

    <a href="{{ route('repositorios.create') }}" class="btn btn-primary mr-2 text-white">Crear</a>

@endsection

@section('content')

    <h2 class="text-center mb-5">Administrar</h2>

    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">

            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col"> Titulo</th>
                    <th scole="col"> Categoría</th>
                    <th scole="col"> Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Sistemas</td>
                    <td>Licencias</td>
                    <td>Registro</td>
                </tr>
            </tbody>

        </table>

    </div>

@endsection
