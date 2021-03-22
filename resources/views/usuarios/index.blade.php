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
            
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>