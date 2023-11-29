@extends('layouts.plantilla')

@section('titulo', 'Recuerdos')

@section('contenido')

    <h1 class="display-1 text-center text-danger mt-4"> RECUERDOS </h1>  
    {{-- CARD PARA RECUERDOS --}}
    <div class="container mt-5">
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

        @foreach ($consR as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                <h5 class="card-title text-center"> {{ $item->titulo }} </h5>
            </div>
            <div class="card-body">
                <h6 class="card-title text-center"> {{ $item->recuerdo }} </h6>
                <h6 class="card-title text-left"> {{ $item->fecha }} </h6>
            
              <hr>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#editar{{ $item->id }}">
                Editar
              </button>
              <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#borrar{{ $item->id }}">
                Borrar
              </button>
            </div>
          </div>
          <br>
          <br>
          @include('partials.modal')
          @endforeach
    </div>
    <br>
    <br>
    <br>

    
   {{--  @include('partials.pagination') --}}
@endsection


