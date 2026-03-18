<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <a href="{{ route('ofertas.index')}}"> Regresar a la lista </a>
    </p>

    <form action="{{ route('ofertas.update', $oferta) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" value="{{ old('titulo') ?? $oferta->titulo }}">
        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="vigencia">Vigencia:</label>
        <input type="date" id="vigencia" name="vigencia" value="{{ old('vigencia') ?? $oferta->vigencia }}">
        @error('vigencia')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br><br>

        <label for="tienda">Tienda:</label>
        <input type="text" id="tienda" name="tienda" value="{{ old('tienda') ?? $oferta->tienda }}">
        @error('tienda')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror<br><br>

        <label for="precio_original">Precio Original:</label>
        <input type="number" id="precio_original" name="precio_original" value="{{ old('precio_original') ?? $oferta->precio_original }}">
        @error('precio_original')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror<br><br>

        <label for="precio_descuento">Precio con Descuento:</label>
        <input type="number" id="precio_descuento" name="precio_descuento" value="{{ old('precio_descuento') ?? $oferta->precio_descuento }}">
        @error('precio_descuento')
            <div class="alert alert-danger">{{ $message}}</div>
        @enderror<br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>