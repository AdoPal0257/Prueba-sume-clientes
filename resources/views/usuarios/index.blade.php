@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

@include('usuarios.cabecera')

        <!-- Main row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Usuarios registrados</h5>
                    <div class="row">
                        <div class="col-md-6"><a href="{{url('usuarios/create')}}" class="btn btn-success">Nuevo Usuario</a></div>
                    </div>
                
                        <!-- <table class="table table-light"> -->
                            <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
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
                                    <td>
                                        <!-- <img src="{{ asset('storage').'/'.$usuario->Foto}}" width="100" alt=""> -->
                                        <img src="{{ asset('../../../storage/app/public').'/'.$usuario->Foto}}" width="100" alt="">
                                    </td>
                                    <td>{{$usuario->Nombre}}</td>
                                    <td>{{$usuario->Apellidos}}</td>
                                    <td>{{$usuario->Email}}</td>
                                    
                                    <td>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="{{ url('/usuarios/'.$usuario->id.'/edit') }}" class="btn btn-warning">
                                            Editar
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <form action="{{ url('/usuarios/'.$usuario->id) }}" method="post">
                                                @csrf 
                                                {{ method_field('DELETE') }}
                                                <input type="submit" onclick="return confirm('¿Seguro de eliminar el registro?')"
                                                value="Borrar" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>

                                            
                                    
                                    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@include('usuarios.pie')