@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')
    <h1 class="display-1 text-center text-danger mt-4"> FORMULARIO </h1>
    
   {{--  <x-alert>
        <p>Esto es un texto de prueba para la vista de Formulario</p>
    </x-alert>  --}}

    <div class="container mt-5 col-md-6">
        @if (session()->has('confirmacion'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                  </svg>
                {{session('confirmacion')}} </strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
       
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16">
                        <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    {{$error}} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

        <div class="card">
            <div class="card-header fs-4 fw-medium text-danger text-center">
            Introduce aquí tus memorias
            </div>

            <div class="card-body">
                <form method="POST" action="/recuerdo">
                    @csrf
                    {{-- Se tiene que hacer cada que queramos mandar algo por el form y por post --}}
                    <div class="mb-3">
                        <label class="form-label">Título: </label>
                        <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
                        <p class="text-decoration-line-through">{{ $errors->first('txtTitulo')}}</p> 
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Recuerdos: </label>
                        <input type="text" name="txtRecuerdo" class="form-control" value="{{ old('txtTitulo') }}">
                        {{ $errors->first('txtRecuerdo')}}
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
