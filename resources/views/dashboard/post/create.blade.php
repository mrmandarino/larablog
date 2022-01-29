<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Create Post</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Create Post</h1><br>
                <form action="{{ route('post.store') }}" method="POST">
                    @csrf
                    <div>
                        @if (session()->has('exito'))
                            <div class="alert alert-success">
                                {{ session()->get('exito') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="title"> Title </label><br>
                        <input class="form-control" type="text" name="title" id="title">
                    </div><br>

                    <div class="form-group">
                        <label for="url_clean"> URL limpia </label><br>
                        <input class="form-control" type="text" name="url_clean" id="url_clean">
                    </div><br>

                    <div class="form-group">
                        <label for="content">Contenido</label><br>
                        <textarea class="form-control" placeholder="Deje aquí sus comentarios" name="content"
                            id="content"></textarea>
                    </div><br>

                    <button type="submit" class="btn btn-primary">Enviar</button>


            </div>
        </div>


    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>