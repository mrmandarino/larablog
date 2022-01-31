<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Modulo admin</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

    <style type="text/css">
        .wfiedls{
          display: none;
          
        }
    </style>    
</head>

<body>
    <div class="container">
        <div>
            @if (session()->has('exito'))
                <div class="alert alert-success">
                    {{ session()->get('exito') }}
                </div>
            @endif
        </div>
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
