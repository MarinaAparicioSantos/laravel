@extends('layouts.master')

<div class = "row col-12 col-md-6 mt-5 mb-5 offset-md-3" style= "text-align:center;">

    <form class = "row g-3" action = "/edit/" method = "POST">
        @csrf

        <input type="hidden" name="ISBN" value="<?php echo $libro->ISBN ?>"/>


        <div class="col-12 col-md-12">
            <label for="nombre" class="form-label">
                Titulo:
                <input class="form-control" type = "text" name = "titulo" value="<?php echo $libro->titulo?>"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="nombre" class="form-label">
                Autor:
                <input class="form-control" type = "text" name = "autor" value="<?php echo $libro->autor?>"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="nombre" class="form-label">
                Idioma:
                <input class="form-control" type = "text" name = "idioma" value="<?php echo $libro->idioma?>"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="nombre" class="form-label">
                Publicacion:
                <input class="form-control" type = "text" name = "publicacion" value="<?php echo $libro->publicacion?>"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="nombre" class="form-label">
                Editorial:
                <input class="form-control" type = "text" name = "id_Editorial" value="<?php echo $libro->id_Editorial?>"/>
            </label>
        </div>

        <input type="submit" class = "btn btn-secondary" value="Enviar">

    </form>

</div>