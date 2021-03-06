@extends('admin.template.main')


@section('content')

    @if($errors->has())
        <div class="alert alert-danger">
            <ul>
                <strong>Whoops!</strong> Hubo problemas con tus entradas.
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!!Form::model($zona,['route' => ['admin.zonas.update',$zona] , 'method' => 'PUT']) !!}

    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre',$zona->nombre,['nombre' => 'form-control', 'placeholder' => 'Nombre' , 'required']) !!}

    <br>
    <br><br>

    <div class="form-group">
        {!! Form::submit('Guardar', ['class' => 'btn btn-warning']) !!}

    </div>

    {!! Form::close() !!}



@endsection

