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

                
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#TypeOfConstruction").on('change',function(){
                            var selectedBalue = $("#TypeOfConstruction").val();
                            if (selectedBalue == "Timber Frame") 
                            {
                                $(".wfiedls").slideDown(500);
                            }
                            else{
                                $(".wfiedls").slideUp(500);
                            }
                        }); 
                       
                    });
                </script> 

                <fieldset class="form-group">
                    <label for="exampleSelect1">Type of Construction</label>
                    <select class="form-control" id="TypeOfConstruction">
                      <option>Traditional Masonry</option>
                      <option>Timber Frame</option>
                      </select>
                </fieldset>

                <fieldset class="form-group wfiedls">
                    <label for="PartyWalls">Which walls are party walls?</label>
                       <br><input type="checkbox"> W1
                       <br><input type="checkbox"> W2
                       <br><input type="checkbox"> W3
                       <br><input type="checkbox"> W4
                </fieldset>
                

                <button type="submit" class="btn btn-primary">Enviar</button>


        </div>
    </div>



@endsection
