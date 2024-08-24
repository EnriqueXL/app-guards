@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Actualizar empleado')

@section('content')

    <!--Volver atras-->
    {{-- <div class="mt-2 text-right">
        <a href="{{ route('employe.index') }}" class="btn btn-light"> <i class="fas fa-chevron-left"></i></a>
    </div> --}}
    @section('nav-menu')
        <a href="{{ route('employe.show', $employe['id']) }}" class="btn btn-light"><i class="fas fa-chevron-left"></i></a>
    @endsection
   
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button"
                role="tab" aria-controls="nav-home" aria-selected="true">Datos personales</button>
            <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button"
                role="tab" aria-controls="nav-profile" aria-selected="false">Datos laborales</button>
            <button class="nav-link" id="nav-obs-tab" data-toggle="tab" data-target="#nav-obs" type="button"
                role="tab" aria-controls="nav-obs" aria-selected="false">Observaciónes</button>
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
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $employe['nombre'] }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido_paterno">Apellido paterno</label>
                                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{ $employe['apellido_paterno'] }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="apellido_materno">Apellido materno</label>
                                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{ $employe['apellido_materno'] }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $employe['email'] }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $employe['telefono'] }}" maxlength="10">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="direccion">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $employe['direccion'] }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto_perfil">Foto de perfil</label>
                            <input type="file" class="form-control" id="foto_perfil" name="foto_perfil">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employe['nombre'] }}</h5>
                    <div class="card-text">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="id_rol">Perfil</label>
                                <select id="id_rol" name="id_rol" class="form-control">
                                    <option value="" disabled>Seleccione el puesto:</option>
                                    <option value="1" {{ $employe['id_rol'] == 1 ? 'selected' : '' }}>Sistemas</option>
                                    <option value="2" {{ $employe['id_rol'] == 2 ? 'selected' : '' }}>Supervisor</option>
                                    <option value="3" {{ $employe['id_rol'] == 3 ? 'selected' : '' }}>Guardia</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fecha_contratacion">Fecha de contratación</label>
                                <input type="date" class="form-control" id="fecha_contratacion" name="fecha_contratacion" value="{{ $employe['fecha_contratacion'] }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="activo">Estatus</label>
                                <select id="activo" name="activo" class="form-control">
                                    <option value="" disabled>Selecciona...</option>
                                    <option value="1" {{ $employe['activo'] == 1 ? 'selected' : '' }}>Activo</option>
                                    <option value="2" {{ $employe['activo'] == 2 ? 'selected' : '' }}>Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-obs" role="tabpanel" aria-labelledby="nav-obs-tab">
                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employe['nombre'] }}</h5>
                    <div class="card-text">
                        <div class="form-group">
                            <label for="actas_administrativas">Actas administrativas</label>
                            <input type="file" class="form-control" id="actas_administrativas" name="actas_administrativas">
                        </div>
                        <div class="form-group">
                            <label for="observacion">Observaciones</label>
                            <textarea class="form-control" id="observacion" name="observacion" rows="4">{{ $employe['observacion'] }}</textarea>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mt-2 text-right">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('employe.show', $employe['id']) }}" class="btn btn-light">Cancelar</a>
        </div>
    </form>

@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
