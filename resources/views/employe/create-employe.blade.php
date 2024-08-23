@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Create Employe')

@section('content')

    <div class="container">
        <div class="mt-2 text-right">
            <a href="{{ route('employe.index') }}" class="btn btn-light"> <i class="fas fa-chevron-left"></i></a>
        </div>
        {{-- <div class="row">
            <div class="col-12"> --}}
                <div class= "description m-2 text-center">
                    <h1>Registro de empleado</h1>
                </div>

                <!-- Mostrar errores de validación -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('employe.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    value="{{ old('nombre') }}" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="apellido_materno">Apellido Materno:</label>
                                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control"
                                    value="{{ old('apellido_materno') }}" placeholder="Apellido Materno">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="apellido_paterno">Apellido Paterno:</label>
                                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control"
                                    value="{{ old('apellido_paterno') }}" placeholder="Apellido Paterno">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Correo:</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ old('email') }}" placeholder="Correo electronico">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" name="telefono" id="telefono" class="form-control"
                                    value="{{ old('telefono') }}" maxlength="10" placeholder="Teléfono">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" name="direccion" id="direccion" class="form-control"
                                    value="{{ old('direccion') }}" placeholder="Dirección">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                                    value="{{ old('fecha_nacimiento') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="puesto">Puesto:</label>
                                <select name="id_rol" id="id_rol" class="form-control">
                                    <option value="">Seleccione un puesto</option>
                                    <option value="1" {{ old('puesto') == 1 ? 'selected' : '' }}>Sistemas</option>
                                    <option value="2" {{ old('puesto') == 2 ? 'selected' : '' }}>Supervisor</option>
                                    <option value="3" {{ old('puesto') == 3 ? 'selected' : '' }}> Guardia</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            {{-- </div>
        </div> --}}
    </div>

@endsection

@section('js')
    <script>
        //custom ks
    </script>
@endsection
