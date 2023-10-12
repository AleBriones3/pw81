@extends('layouts.plantilla')

@section('titulo', 'Inicio')

@section('contenido')

    <h1 class="display-1 text-center text-danger">Vista1</h1>

    <x-card></x-card>

    <x-mensaje mensaje="Este es de la VISTA 1" fecha="11/10/23"></x-mensaje>

@endsection