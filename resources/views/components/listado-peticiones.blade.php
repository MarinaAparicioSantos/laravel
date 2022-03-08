@extends('layouts.master')

<div class = "mt-5 mb-5 t-auto">
    <table border = 1 class = "table table-secondary table-striped">
        <tr>

            <th>Nombre y apellidos</th>
            <th>Correo</th>
            <th>Titulo</th>
            
        
        </tr>
    @foreach ($peticiones as $p)
        <tr>

            <td>{{$p->nombreApellidos}}</td>
            <td>{{$p->correo}}</td>
            <td>{{$p->titulo}}</td>
        </tr>

    @endforeach
    </table>
</div>