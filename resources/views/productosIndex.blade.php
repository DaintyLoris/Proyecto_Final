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
        
        <nav>   
            <div class="nav-wrapper">
                <a href="#" class="brand-logo right">Inventory</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="producto">Inicio</a></li>
                </ul>
            </div>
        </nav>

        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <hr>

        <div class="container">
        <!-- Page Content goes here -->
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

            <br>

            <div class="row">
                <div class="col s12 m4 l8"><a href="/producto/create" class="btn waves-effect waves-teal">Agregar</a></div>
            </div>

        </div>

    </body>

</html>