<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Index </title>
        

    </head>

    <body>
        
        <h1> Agregar Producto </h1>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <form action="/producto" method="POST">
            @csrf

            <label for="name">Nombre de producto:</label><br>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
            <br>

            <label for="precio">Precio:</label><br>
            <input type="text" name="precio" id="precio" value="{{ old('precio') }}">
            <br>

            <label for="categoria">Categoria:</label><br>
            <input type="text" name="categoria" id="categoria" value="{{ old('categoria') }}">

            </textarea>
            <br>

            <br>
            <input type="submit" value="Enviar">

        </form>
        

    </body>

</html>