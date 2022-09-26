<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contacto</title>
        

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

        <form action="/formValidate" method="POST">
            @csrf

            <label for="name">Nombre de producto:</label><br>
            <input type="text" name="nombreProducto" id="nombreProducto" value="{{ old('nombreProducto') }}">
            <br>

            <label for="email">Precio:</label><br>
            <input type="text" name="precioProducto" id="precioProducto" value="{{ old('precioProducto') }}">
            <br>

            <label for="comentario">Categoria:</label><br>
            <input type="text" name="categoriaProducto" id="categoriaProducto" value="{{ old('categoriaProducto') }}">

            </textarea>
            <br>

            <br>
            <input type="submit" value="Enviar">

        </form>
        

    </body>

</html>