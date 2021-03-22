<h1>{{$modo}} usuario</h1>
<div class="card-body">
    <div class="form-group">
        <label for="Nombre"> Nombre </label>
        <input type="text" class="form-control" placeholder="Ingrese el nombre" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:''}}" id="Nombre">
    </div>
    <div class="form-group">
        <label for="Apellidos"> Apellidos </label>
        <input type="text" class="form-control" placeholder="Ingrese apellidos" name="Apellidos" value="{{ isset($usuario->Apellidos)?$usuario->Apellidos:''}}" id="Apellidos">
    </div>
    <div class="form-group">
        <label for="Email"> Email </label>
        <input type="text" class="form-control" placeholder="Ingrese email" name="Email" value="{{ isset($usuario->Email)?$usuario->Email:''}}" id="Email">
    </div>
    <div class="form-group">
        <label for="Clave"> Clave </label>
        <input type="password" class="form-control" placeholder="Clave" name="Clave" value="{{ isset($usuario->Clave)?$usuario->Clave:''}}" id="Clave">
    </div>
    <div class="form-group">
        <label for="Foto"> Foto:   </label>
        @if(isset($usuario->Foto))
        <img src="{{asset('storage').'/'.$usuario->Foto}}" width="100" alt="">
        @endif
        <input type="file" name="Foto" value="" id="Foto">
    </div>

    <div class="card-footer">
        <input type="submit" class="btn btn-primary" value="{{$modo}} datos">
        <a href="{{url('usuarios/')}}" class="btn btn-secondary">Regresar</a>
    </div>

</div>
