@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')
    <h1 class="display-1 text-center text-danger mt-4"> FORMULARIO </h1>
    
   {{--  <x-alert>
        <p>Esto es un texto de prueba para la vista de Formulario</p>
    </x-alert>  --}}

    <div class="container mt-5 col-md-6">
        <div class="card">
            <div class="card-header fs-4 fw-medium text-danger text-center">
            Introduce aquí tus memorias
            </div>

            <div class="card-body">
                <form method="POST" action="/guardarRecuerdo">
                    @csrf
                    {{-- Se tiene que hacer cada que queramos mandar algo por el form y por post --}}
                    <div class="mb-3">
                        <label class="form-label">Título: </label>
                        <input type="text" name="txtTitulo" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdos: </label>
                        <input type="text" name="txtRecuetdo" class="form-control">
                    </div>


            </div>

            <div class="card-footer text-body-secondary">
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-danger">Guardar Recuerdo</button>
                </form>
            </div>
        </div>{{-- Cierre del Card --}}
    </div>{{-- Cierre del Container --}}

@endsection
