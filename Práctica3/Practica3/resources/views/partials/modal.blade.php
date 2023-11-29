<!-- Modal -->
  <div class="modal fade" id="editar{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
      <div class="modal-content">
        {{-- Header --}}
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- Body --}}
        <div class="modal-body">
            <form method="POST" action="/recuerdo/{{$item->id}}/confirm">
                @csrf
                {!! method_field('PUT')!!}
                {{-- Se tiene que hacer cada que queramos mandar algo por el form y por post --}}
                <div class="mb-3">
                    <label class="form-label">Título: </label>
                    <input type="text" name="txtTitulo" class="form-control" value="{{ $item->titulo }}">
                    <p class="text-decoration-line-through">{{ $errors->first('txtTitulo')}}</p> 
                </div>

                <div class="mb-3">
                    <label class="form-label">Recuerdos: </label>
                    <input type="text" name="txtRecuerdo" class="form-control" value="{{ $item->recuerdo }}">
                    {{ $errors->first('txtRecuerdo')}}
                </div>
    
                <div class="card-footer text-body-secondary">
                 
        </div>
        {{-- Footer --}}
        <div class="modal-footer">
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-danger">Editar Recuerdo</button>
            </div>
        </div>
    </form>
        </div>
      </div>
    </div>
  </div>

  {{-- MODAL PARA BORRAR --}}

<!-- Modal -->
<div class="modal fade" id="borrar{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      {{-- Header --}}
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      {{-- Body --}}
      <div class="modal-body">
          <form method="POST" action="/recuerdo/{{$item->id}}/borrar">
              @csrf
              {!! method_field('PUT')!!}
              {{-- Se tiene que hacer cada que queramos mandar algo por el form y por post --}}
              <div class="mb-3">
                  <label class="form-label">Título: </label>
                  <input type="text" name="txtTitulo" class="form-control" value="{{ $item->titulo }}">
                  <p class="text-decoration-line-through">{{ $errors->first('txtTitulo')}}</p> 
              </div>

              <div class="mb-3">
                  <label class="form-label">Recuerdos: </label>
                  <input type="text" name="txtRecuerdo" class="form-control" value="{{ $item->recuerdo }}">
                  {{ $errors->first('txtRecuerdo')}}
              </div>
  
              <div class="card-footer text-body-secondary">
               
      </div>
      {{-- Footer --}}
      <div class="modal-footer">
          <div class="d-grid gap-2">
              <button type="submit" class="btn btn-outline-danger">Borrar Recuerdo</button>
          </div>
      </div>
  </form>
      </div>
    </div>
  </div>
</div>