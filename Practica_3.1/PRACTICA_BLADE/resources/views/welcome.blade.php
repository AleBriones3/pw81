@extends('layouts.plantilla')

@section('titulo', 'Inicio')



@section('contenido')
<x-navbar></x-navbar>
    <h1 class="display-1 text-center text-danger mt-4">HOME</h1>
    
  {{--  <div class="py-5">
        <div class="col-md-6">
            <x-alert />
        </div>
    </div>  --}}

   {{--  @component('partials.offcanvas')
        
    @endcomponent --}}
    <x-offcanvas></x-offcanvas>
    
    <x-mensaje mensaje="Este es el welcome" fecha="11/10/23"></x-mensaje>

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
<x-alert type="success" title="Success Alert">
    This is a success message.
</x-alert>

