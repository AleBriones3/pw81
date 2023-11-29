<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>
<body>
    <h1 class="display-1 text-center text-info mt-5">EXAMEN PW2</h1>
    <div class="container mt-5 col-md-6">
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('txtNombre') }}
        </div>
        <br>
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('txtFecha') }}
        </div>
        <br>
        <div class="alert alert-danger" role="alert">
            {{ $errors->first('txtVendidos') }}
        </div>
      
        {{--  --}}
        @if (session()->has('validated'))
        <script>
            @if(session()->has('validated'))
            Swal.fire({
                icon: 'success',
                title: 'BIEEEEEEEN!',
                text: '{{ session('validated') }}',
            });
            @endif
        </script>
        @endif
        <form method="POST" action="/Inicio">
            @csrf
            <h3 class="text-center mt-5">VIDEOJUEGOS</h3>
            <hr>
            <div class="mb-3">
                <input type="text" name="txtNombre" class="form-control" value="{{ old('txtNombre') }}">
                {{ $errors->first('txtNombre') }}
            </div>
            <div class="mb-3">
                <label>Fecha Publicación</label>
                <input type="text" class="form-control" name="txtFecha" value="{{ old('txtFecha') }}">
            </div>
            <div class="mb-3">
                <label>Videojuegos Vendidos</label>
                <input type="text" class="form-control" name="txtVendidos"  value="{{ old('txtVendidos') }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
