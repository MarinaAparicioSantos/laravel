@extends('layouts.master')

<div class = "row col-12 col-md-6 mt-5 mb-5 offset-md-3" style= "text-align:center;">
    <form class = "row g-3" action = "store" method = "POST">


    @csrf

        <div class="col-12 col-md-12">
            <label for="ISBN" class="form-label">
                ISBN:
                <input type = "text" class="form-control" name = "ISBN"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="titulo" class="form-label">
                Titulo:
                <input type = "text" class="form-control" name = "titulo"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="autor" class="form-label">
                Autor:
                <input type = "text" class="form-control" name = "autor"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="idioma" class="form-label">
                Idioma:
                <input type = "text" class="form-control" name = "idioma"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="publicacion" class="form-label">
                Publicacion:
                <input type = "date" class="form-control" name = "publicacion"/>
            </label>
        </div>


        <div class="col-12 col-md-12">
            <label for="id_Editorial" class="form-label">
                Id editorial:
                <input type = "text" class="form-control" name = "id_Editorial"/>
            </label>
        </div>

        <input type="submit" class = "btn btn-secondary" value="Enviar"/>


    </form>
</div>