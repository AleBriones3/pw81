<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<div class="container mt-5 col-md-6"> 
  @if (session()->has('confirmacion'))
    <script>
      @if(session()->has('confirmacion'))
        Swal.fire({
          icon: 'success',
          title: 'BIEEEEEEEN!',
          text: '{{ session('confirmacion') }}',
        });
      @endif
    </script>
  @endif
  <div class="card" style="width: 45rem;">
    <div class="card-body">
      <form method="POST" action="/guardarLibro">
        @csrf
        <h5 class="card-title display-6 text-center text-black">Datos del Libro</h5>
        <hr>
        <form class="container row g-3 needs-validation" novalidate>
          <div class="col-md-12 mt-2 text-center">
            <label class="form-label">Título del Libro</label>
            <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
            {{ $errors->first('txtTitulo')}}
          </div>
          <div class="col-md-12 mt-2 text-center ">
            <label class="form-label">Autor del Libro</label>
            <input type="text" name="txtAutor" class="form-control" value="{{ old('txtAutor') }}" >
            {{ $errors->first('txtAutor')}}
          </div>
          <div class="col-md-12 mt-2 text-center">
            <label class="form-label">ISBN</label>
            <input type="text" name="txtISBN" class="form-control" value="{{ old('txtISBN') }}" >
            {{ $errors->first('txtISBN')}}
          </div>
          <div class="col-md-12 mt-2 text-center">
            <label class="form-label">Páginas del Libro</label>
            <input type="text" name="txtPag" class="form-control" value="{{ old('txtPag') }}" >
            {{ $errors->first('txtPag')}}
          </div>
          <div class="col-md-12 mt-2 text-center">
            <label class="form-label">Editorial</label>
            <input type="text" name="txtEditorial" class="form-control" value="{{ old('txtEditorial') }}" >
            {{ $errors->first('txtEditorial')}}
          </div>
          <div class="col-md-12 mt-2 text-center">
            <label class="form-label">E-mail de Editorial</label>
            <div class="input-group has-validation">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" name="txtEmail" class="form-control" aria-describedby="inputGroupPrepend">
            </div>
            {{ $errors->first('txtEmail')}}
          </div>
          <div class="col-12">
            {{-- <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div> --}}
          </div>
          <hr>
          <div class="col-12 d-grid gap-2">
            <button class="btn btn-outline-warning" type="submit">Guardar Libro</button>
          </div>
        </form>
      </form>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
