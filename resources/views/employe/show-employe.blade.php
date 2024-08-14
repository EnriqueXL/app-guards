@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Detalle de empleado')

@section('content')

    <div class="container">
        <!-- Volver -->
        <div class="mt-2">
         
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
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employesInfo['nombre'] }}</h5>
                    <div class="card-text">

                        <strong>Correo electrónico:</strong> {{ $employesInfo['email'] }} <br>
                        <strong>Teléfono:</strong> {{ $employesInfo['telefono'] }} <br>
                        <strong>Dirección:</strong> {{ $employesInfo['direccion'] }} <br>

                    </div>

                </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card-body">
                    <h5 class="card-title">{{ $employesInfo['nombre'] }}</h5>
                    <div class="card-text">

                    
                        <strong>Puesto:</strong> {{ $employesInfo['perfil'] }} <br>
                        <strong>Fecha de contratación:</strong> {{ $employesInfo['fecha_contratacion'] }} <br>
                        <strong>Estatus:</strong> {{ $employesInfo['estatus'] }} <br>

                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                
                <div class="card-body bg-white">
                    <h5 class="card-title">{{ $employesInfo['nombre'] }}</h5>
                    <div class="card-text">

                        <strong>Correo electrónico:</strong> {{ $employesInfo['email'] }} <br>
                        <strong>Teléfono:</strong> {{ $employesInfo['telefono'] }} <br>
                        <strong>Dirección:</strong> {{ $employesInfo['direccion'] }} <br>
                        <strong>Fecha de contratación:</strong> {{ $employesInfo['fecha_contratacion'] }} <br>
                        <strong>Estatus:</strong> {{ $employesInfo['estatus'] }} <br>

                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
