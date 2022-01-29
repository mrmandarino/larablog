@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')

    <div class="row">
        <div class="col">
            <h1>Create Post</h1><br>
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label for="title"> Title </label><br>
                    <input class="form-control" type="text" name="title" id="title">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div><br>

                <div class="form-group">
                    <label for="url_clean"> URL limpia </label><br>
                    <input class="form-control" type="text" name="url_clean" id="url_clean">
                </div><br>

                <div class="form-group">
                    <label for="content">Contenido</label><br>
                    <textarea class="form-control" placeholder="Deje aquí sus comentarios" name="content" id="content"></textarea>
                </div><br>

                <button type="submit" class="btn btn-primary">Enviar</button>


        </div>
    </div>



@endsection
