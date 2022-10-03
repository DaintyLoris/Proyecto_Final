<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Pagina Principal </title>
        
    </head>

    <body>
        
        <h1> Listado de Productos </h1>

        <hr>

        <a href="/producto/create"> Agregar producto </a>
        <br> <br>

        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
            </tr>
            @foreach($productos as $producto)
                <tr>
                    <td>
                        <a href=/producto/{{ $producto->id }}>
                            {{$producto->nombre}}
                        </a>
                    </td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->categoria}}</td>
                </tr>
            @endforeach
        </table>

    </body>

</html>