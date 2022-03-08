@extends('layouts.master')

<div class = "row col-12 col-md-6 mt-5 mb-5 offset-md-3" style= "text-align:center;">
    <form class = "row g-3" action = "createEditorial" method = "POST">

    @csrf
        <div class="col-12 col-md-12">
            <label for="nombre" class="form-label">
                Nombre:
                <input type = "text" class="form-control" name = "nombre"/>
            </label>
        </div>

        <div class="col-12 col-md-12">
            <label for="nacionalidad" class="form-label">
                Nacionalidad:
                <input type = "text" class="form-control" name = "nacionalidad"/>
            </label>
        </div>

        <input type="submit" class = "btn btn-secondary" value="Enviar">

    </form>
    </div>