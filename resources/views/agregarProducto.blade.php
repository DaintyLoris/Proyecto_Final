<!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Index </title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])

    </head>

    <body>
        
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="/producto" class="breadcrumb">Inicio</a>
                    <a href="/producto/create" class="breadcrumb">Agregar Producto</a>
                </div>
            </div>
        </nav>  

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif

        <div class="row">

            <form action="/producto" method="POST" class="col s12" enctype="multipart/form-data">>
                @csrf

                <div class="row">

                    <div class="input-field col s2">
                        <input placeholder="Nombre Producto" name ="nombre" id="nombre" type="text" class="validate" value="{{  old('nombre')}}">
                        <label for="name">Producto</label>
                    </div>

                    <div class="input-field col s1">
                        <input placeholder="Precio $" name ="precio" id="precio" type="text" class="validate" value="{{ old('precio')}}">
                        <label for="precio">Precio</label>
                    </div>
            
                </div>

                <div class="row">
                    <div class="input-field col s2">
                        <input placeholder="Categoria de producto" name ="categoria" id="categoria" type="text" class="validate" value="{{old('categoria')}}">
                        <label for="categoria">Categoria</label>
                    </div>
                </div>

                <input type="file" name = "archivo">
                
                <br>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>

                <br>

            </form>
        </div>
        

    </body>

</html>