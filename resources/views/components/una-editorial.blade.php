<table border = 1>
    <tr>

        <td>Nombre</td>
        <td>Nacionalidad</td>
        
    
    </tr>
@foreach ($editoriales as $e)
    <tr>
        <td>{{$e->nombre}}</td>
        <td>{{$e->nacionalidad}}</td>
    </tr>

@endforeach
</table>