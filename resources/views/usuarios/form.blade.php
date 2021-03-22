<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ $usuario->Nombre}}" id="Nombre">

<label for="Apellidos"> Apellidos </label>
<input type="text" name="Apellidos" value="{{ $usuario->Apellidos}}" id="Apellidos">

<label for="Email"> Email </label>
<input type="text" name="Email" value="{{ $usuario->Email}}" id="Email">

<label for="Clave"> Clave </label>
<input type="password" name="Clave" value="{{ $usuario->Clave}}" id="Clave">

<label for="Foto"> Foto </label>
{{ $usuario->Foto}}
<input type="file" name="Foto" value="" id="Foto">

<input type="submit" value="Guardar datos">