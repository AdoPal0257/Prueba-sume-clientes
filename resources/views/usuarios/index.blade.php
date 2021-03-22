Pagina de index
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @Foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->Foto}}</td>
            <td>{{$usuario->Nombre}}</td>
            <td>{{$usuario->Apellidos}}</td>
            <td>{{$usuario->Email}}</td>
            
            <td>Editar | 

            <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Seguro de eliminar el registro?')"
                value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>