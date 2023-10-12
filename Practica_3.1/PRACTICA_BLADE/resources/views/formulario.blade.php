@extends('layouts.plantilla')

@section('titulo', 'Formulario')

@section('contenido')
    <h1 class="display-1 text-center text-danger mt-4"> FORMULARIO </h1>
    
   {{--  <x-alert>
        <p>Esto es un texto de prueba para la vista de Formulario</p>
    </x-alert>  --}}

    
<x-alert>
    <x-slot name="title">
        Este es el título desde el slot desde la vista de formularios
    </x-slot>
    <p>Esto es un texto de prueba para la vista de Welcome</p>
</x-alert>

@endsection
