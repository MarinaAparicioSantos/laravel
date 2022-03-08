@extends('layouts.master')

<div class = "row col-12 col-md-6 mt-5 mb-5 offset-md-3" style= "text-align:center;">
    <form class = "row g-3" action = "/sendEmail" method = "POST">

    @csrf
        <div class="col-12 col-md-12">
            <label for="nombreApellidos" class="form-label">
                Nombre y apellidos:
                <input type = "text" class="form-control" name = "nombreApellidos"/>
            </label>
        </div>

        <div class="col-12 col-md-12">
            <label for="correo" class="form-label">
                Correo electronico:
                <input type = "text" class="form-control" name = "correo"/>
            </label>
        </div>

        <div class="col-12 col-md-12">
            <label for="titulo" class="form-label">
                Título del libro:
                <input type = "text" class="form-control" name = "titulo"/>
            </label>
        </div>

        <input type="submit" class = "btn btn-secondary" value="Enviar">

    </form>
    </div>