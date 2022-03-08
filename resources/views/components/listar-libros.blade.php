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
           @auth <th>Editar</th>@endauth
            <th>Detalles</th>
            
        
        </tr>
    @foreach ($libros as $libro)
        <tr>

            <td>{{$libro->ISBN}}</td>
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->idioma}}</td>
            <td>{{$libro->publicacion}}</td>
            <td>{{$libro->id_Editorial}}</td>
            @auth<td><a class = "btn btn-secondary"href="/editLibro/{{$libro->ISBN}}">Editar</a></td>@endauth
            <td><a class = "btn btn-secondary"href="/showLibro/{{$libro->ISBN}}">Detalles</a></td>
            <td><a class = "btn btn-secondary" href="/variosPDF/">Generar PDF</a></td>


        </tr>

    @endforeach
    </table>
</div>