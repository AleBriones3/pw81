<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <h1 class="display-1 text-center text-info mt-5">EXAMEN PW2</h1>
    <div class="container-sm">
      @if (session()->has('validated'))
      <script>
        swal.fire({
          icon:'success',
          title:'Bieeeen',
          text: {{session('validated')}}
        });
      </script>
      @endif
        <form method="POST" action="/">
            @csrf
            <h3 class="text-center mt-5">VIDEOJUEGOS</h3>
            <hr>
            <div class="mb-3">
              <label>Nombre: </label>
              <input type="text" class="form-control" name="txtNombre" value="{{old('txtNombre')}}" required>
              {{errors -> first('txtNombre')}} 
            </div>
            <div class="mb-3">
              <label>Fecha Publicación</label>
              <input type="text" class="form-control" name="txtFecha" value="{{old('txtNombre')}}" required>
              {{errors -> first('txtFecha')}}
            </div>
            <div class="mb-3">
                <label>Videojuegos Vendidos</label>
                <input type="text" class="form-control" name="txtVendidos"  value="{{old('txtNombre')}}"required>
                {{errors -> first('txtVendidos')}}
              </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    
</body>
</html>
    
    
