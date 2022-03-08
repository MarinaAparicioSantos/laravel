@extends('layouts.master')

<div class = "mt-5 mb-5 t-auto">
    <table border = 1 class = "table table-secondary table-striped">
        <tr>

            <th>ISBN</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Idioma</th>
            <th>Publicación</th>
            <th>Id editorial</th>
            
        
        </tr>
    @foreach ($libro as $l)
        <tr>

            <td>{{$l->ISBN}}</td>
            <td>{{$l->titulo}}</td>
            <td>{{$l->autor}}</td>
            <td>{{$l->idioma}}</td>
            <td>{{$l->publicacion}}</td>
            <td>{{$l->id_Editorial}}</td>
            <td><a class = "btn btn-secondary" href="/unoPDF/<?php echo $l->ISBN ?>">Generar PDF</a></td>

        </tr>

    @endforeach
    </table>
</div>
