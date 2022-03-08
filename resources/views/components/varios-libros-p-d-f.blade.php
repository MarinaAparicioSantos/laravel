
    <table border = 1 >
        <tr>

            <th>ISBN</th>
            <th>Título</th>
            
        
        </tr>
    @foreach ($libros as $libro)
        <tr>

            <td>{{$libro->ISBN}}</td>
            <td>{{$libro->titulo}}</td>


        </tr>

    @endforeach
    </table>