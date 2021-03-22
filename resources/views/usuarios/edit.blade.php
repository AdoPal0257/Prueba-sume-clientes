
<form action="{{url('/usuarios/'.$usuario->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH')}}
@include('usuarios.form',['modo'=>'Editar']);
</form>

