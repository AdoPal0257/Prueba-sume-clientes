<h1>{{$modo}} usuario</h1>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:''}}" id="Nombre">

<label for="Apellidos"> Apellidos </label>
<input type="text" name="Apellidos" value="{{ isset($usuario->Apellidos)?$usuario->Apellidos:''}}" id="Apellidos">

<label for="Email"> Email </label>
<input type="text" name="Email" value="{{ isset($usuario->Email)?$usuario->Email:''}}" id="Email">

<label for="Clave"> Clave </label>
<input type="password" name="Clave" value="{{ isset($usuario->Clave)?$usuario->Clave:''}}" id="Clave">

<label for="Foto"> Foto </label>
@if(isset($usuario->Foto))
<img src="{{asset('storage').'/'.$usuario->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">

<input type="submit" value="{{$modo}} datos">

<a href="{{url('usuarios/')}}">Regresar</a>