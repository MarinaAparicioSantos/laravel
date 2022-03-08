<table border = 1>
    <tr>

        <td>Nombre</td>
        <td>Nacionalidad</td>
        
    
    </tr>
@foreach ($editoriales as $editorial)
    <tr>
        <td>{{$editorial->nombre}}</td>
        <td>{{$editorial->nacionalidad}}</td>
    </tr>

@endforeach
</table>