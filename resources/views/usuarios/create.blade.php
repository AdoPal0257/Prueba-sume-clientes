crear empleado

<form action="{{ url('/usuarios') }}" method="post" enctype="multipart/form-data">
@csrf
    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" id="Nombre">

    <label for="Apellidos"> Apellidos </label>
    <input type="text" name="Apellidos" id="Apellidos">

    <label for="Email"> Email </label>
    <input type="text" name="Email" id="Email">

    <label for="Clave"> Clave </label>
    <input type="password" name="Clave" id="Clave">

    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto">

    <input type="submit" value="Guardar datos">

</form>