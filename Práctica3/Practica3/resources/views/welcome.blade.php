@extends('layouts.plantilla')

@section('titulo', 'Inicio')


@section('contenido')
    <h1 class="display-1 text-center text-danger mt-4">HOME</h1>
    
  {{--  <div class="py-5">
        <div class="col-md-6">
            <x-alert />
        </div>
    </div>  --}}
@endsection



{{-- <x-alert title="Titulo de Prueba">
    <p>Esto es un texto de prueba para la vista de Welcome</p>
</x-alert>  --}}


{{-- <x-alert>
    <x-slot name="title">
        Este es el título desde el slot
    </x-slot>
    <p>Esto es un texto de prueba para la vista de Welcome</p>
</x-alert> --}}

{{-- <x-alert type="success">
    <x-slot name="title">
        Este es el título desde el slot
    </x-slot>
    <p>Esto es un texto de prueba para la vista de Welcome</p>
</x-alert>
 --}}
