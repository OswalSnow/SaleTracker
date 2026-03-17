<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Lista de Ofertas </h1>

        <p>
            <a href="{{ route('ofertas.create') }}"> Introduce nueva oferta </a>
        </p>

        <ul>
            @foreach ($ofertas as $oferta)
                <li>
                    <a href="{{ route('ofertas.show', $oferta) }}">{{$oferta->titulo}}</a>
                    -{{$oferta->tienda}}{{$oferta->vigencia}}
                </li>
            @endforeach
        </ul>

</body>
</html>