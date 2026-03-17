<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Formulario nueva Oferta </h1>

    <p>
        <a href= "{{ route('ofertas.index') }}"> Ir al menú de inicio </a>
    </p>
    
    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">
        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="vigncia">Vigencia:</label>
        <input type="date" id="vigencia" name="vigencia" value="{{ old('vigencia') }}">
        @error('vigencia')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br><br>

        <label for="tienda">Tienda:</label>
        <input type="text" id="tienda" name="tienda" value="{{ old('tienda') }}">
        @error('tienda')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror<br><br>

        <label for="precio_original">Precio Original:</label>
        <input type="number" id="precio_original" name="precio_original" value="{{ old('precio_original')}}">
        @error('precio_original')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror<br><br>

        <label for="precio_descuento">Precio con Descuento:</label>
        <input type="number" id="precio_descuento" name="precio_descuento" value="{{ old('precio_descuento')}}">
        @error('precio_descuento')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror<br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>