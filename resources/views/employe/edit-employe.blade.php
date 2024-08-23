@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Listado de empleados')

@section('content')

    <!--Volver atras-->
    <div class="mt-2 text-right">
        <a href="{{ route('employe.index') }}" class="btn btn-light"> <i class="fas fa-chevron-left"></i></a>
    </div>
    <h3 class="text-center mt-2">Expediente del empleado</h3>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button"
                role="tab" aria-controls="nav-home" aria-selected="true">Datos personales</button>
            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="false">Datos laborales</button>
            <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button"
                role="tab" aria-controls="nav-contact" aria-selected="false">Observaciónes</button>
        </div>
    </nav>
    <form action="{{ route('employe.update', $employe['id']) }}" method="POST">
        @csrf
        @method('POST')

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employe['nombre'] }}</h5>
                    <div class="card-text">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value="{{ $employe['nombre'] }}">
                        </div>
                        <div class="form-group">
                            <label for = "apellido_paterno">Apellido paterno</label>
                            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno"
                                value="{{ $employe['apellido_paterno'] }}">
                        </div>
                        <div class="form-group">
                            <label for="apellido_materno">Apellido materno</label>
                            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno"
                                value="{{ $employe['apellido_materno'] }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ $employe['email'] }}">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono"
                                value="{{ $employe['telefono'] }}" maxlength="10">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion"
                                value="{{ $employe['direccion'] }}">
                        </div>
                    </div>
                    <div class="mt-2 text-right">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employe['nombre'] }}</h5>
                    <div class="card-text">


                        <strong>Puesto:</strong> {{ $employe['perfil'] }} <br>
                        <strong>Fecha de contratación:</strong> {{ $employe['fecha_contratacion'] }} <br>
                        <strong>Estatus:</strong> {{ $employe['estatus'] }} <br>

                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employe['nombre'] }}</h5>
                    <div class="card-text">

                        <strong>Correo electrónico:</strong> {{ $employe['email'] }} <br>
                        <strong>Teléfono:</strong> {{ $employe['telefono'] }} <br>
                        <strong>Dirección:</strong> {{ $employe['direccion'] }} <br>
                        <strong>Fecha de contratación:</strong> {{ $employe['fecha_contratacion'] }} <br>
                        <strong>Estatus:</strong> {{ $employe['estatus'] }} <br>

                    </div>

                </div>
            </div>
        </div>

    </form>

@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
