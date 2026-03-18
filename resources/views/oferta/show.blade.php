<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Oferta de {{ $oferta->titulo}}</h1>

    <p>
        <a href="{{ route('ofertas.index')}}"> Regresar a la lista </a>
    </p>

    <table border ="2" style="border-collapse: collapse; width: 20%;">
        <tr>
            <td style="padding: 8px; border: 1px solid black;"> Titulo </td>
            <td style="padding: 8px; border: 1px solid black;"> {{ $oferta->titulo}} </td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid black;"> Vigencia </td>
            <td style="padding: 8px; border: 1px solid black;"> {{ $oferta->vigencia}} </td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid black;"> Tienda </td>
            <td style="padding: 8px; border: 1px solid black;"> {{ $oferta->tienda}} </td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid black;"> Precio Original </td>
            <td style="padding: 8px; border: 1px solid black;"> ${{ $oferta->precio_original}} </td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid black;"> Precio Descuento </td>
            <td style="padding: 8px; border: 1px solid black;"> ${{ $oferta->precio_descuento}} </td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid black;"> Dinero Ahorrado </td>
            <td style="padding: 8px; border: 1px solid black;"> ${{ $oferta->precio_original - $oferta->precio_descuento}} </td>
        </tr>
    </table>

    <br><a href="{{ route('ofertas.edit', $oferta)}}">Editar esta oferta</a>
    <br><br><form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
</body>
</html>