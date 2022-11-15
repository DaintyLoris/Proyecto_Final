<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Pagina Principal </title>
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
        
    </head>

    <body>
        
        <h1> Listado de Productos </h1>

        <hr>

        <a href="/producto/create"> Agregar producto </a>
        <br> <br>

        <table class="centered highlight responsive-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            @foreach($productos as $producto)
                <tr>
                    <td>
                        <a href=/producto/{{ $producto->id }}>
                            {{$producto->nombre}}
                        </a>
                    </td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->categoria}}</td>
                    <td>
                        <a href="/producto/{{ $producto->id }}/edit">Editar</a>
                    </td>
                    <td>
                        <form action="/producto/{{ $producto->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn waves-effect waves-light btn-small" type="submit" name="action">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </body>

</html>