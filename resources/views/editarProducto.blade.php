<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Index </title>
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])

    </head>

    <body>
        
        <h1> Editar Area </h1>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <div class="row">
            <form action="/producto/{{ $producto->id }}" method="POST" class="col s12">
                @csrf
                @method('patch')

                <div class="row">

                    <div class="input-field col s2">
                        <input placeholder="Nombre Producto" name ="nombre" id="nombre" type="text" class="validate" value="{{  old('nombre') ?? $producto->nombre }}">
                        <label for="name">Producto</label>
                    </div>

                    <div class="input-field col s1">
                        <input placeholder="Precio $" name ="precio" id="precio" type="text" class="validate" value="{{ old('precio') ?? $producto->precio }}">
                        <label for="precio">Precio</label>
                    </div>
            
                </div>

                <div class="row">
                    <div class="input-field col s2">
                        <input placeholder="Categoria de producto" name ="categoria" id="categoria" type="text" class="validate" value="{{ old('categoria') ?? $producto->categoria }}">
                        <label for="categoria">Categoria</label>
                    </div>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>

            </form>
        </div>

    </body>

</html>