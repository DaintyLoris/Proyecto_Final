<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])

    </head>

    <body>
        
        <h1> Detalles del producto </h1>

        <hr>

        <a href="/producto"> Listado de Productos </a>
        <br> <br>

        <h5>Producto:</h2>
        <p>Detalles del producto: {{ $producto->nombre }}</p>
        <p>Precio: {{ $producto->precio }}</p>
        <p>Categoria: {{ $producto->categoria }}</p>
        
        <br>

        <h5>Archivos:</h6>
        <ul>
                <li> {{ $archivo->nombre_original }} </li>
        </ul>



    </body>

</html>