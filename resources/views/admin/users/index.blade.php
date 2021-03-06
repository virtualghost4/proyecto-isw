@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <a href="{{route('admin.users.create')}}" class="btn btn-info"> Registrar nuevo usuario </a><hr>
    <table class="table table-striped">
        <thead>
        <th>ID</th>
        <th>Rut</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Direccion</th>
        <th>Tipo de usuario</th>
        <th>Estado</th>
        <th>Accion</th>


        </thead>
        <tbody>
        <div>
            {!! Form::label('nombre', 'Lista de Usuarios') !!}
            </div><hr>
        @foreach($users as $user)

            <tr>
                <td>{!! $user->id !!}</td>
                <td>{!! $user->rut !!}</td>
                <td>{!! $user->nombre !!}</td>
                <td>{!! $user->telefono !!}</td>
                <td>{!! $user->correo !!}</td>
                <td>{!! $user->direccion !!}</td>
                <td>
                @if($user->tipo_de_usuario=="administrador")

                    <span class="label label-danger">{!! $user->tipo_de_usuario !!}</span>

                    @endif
                    @if($user->tipo_de_usuario=="cajero")
                        <span class="label label-primary">{!! $user->tipo_de_usuario !!}</span>

                @endif
                    @if($user->tipo_de_usuario=="repartidor")
                        <span class="label label-warning">{!! $user->tipo_de_usuario !!}</span>
                        @endif

                </td>
                <td>
                {{ App\Estado::find($user->id_estado)->nombre }}

                </td>

                <td><a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    <a href="{{route('admin.users.show', $user->id)}}"  class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

        {!! $users->render() !!}

    @endsection