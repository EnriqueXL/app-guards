@extends('layouts.app')

@section('css')
    <style>
       
    </style>
@endsection

@section('title', 'Detalle de empleado')

@section('content')

    <!-- Volver -->
    {{-- <div class="mt-2 text-right">
        <a href="{{ route('employe.index') }}" class="btn btn-light"> <i class="fas fa-chevron-left"></i></a>
    </div> --}}
    @section('nav-menu')
        <a href="{{ route('employe.index') }}" class="btn btn-light"> <i class="fas fa-chevron-left"></i></a>
    @endsection

    <h3 class="text-center">Expediente del empleado</h3>
    <div class="container-fluid">
        <ul class="nav nav-tabs" id="employeeTab" role="tablist">
            <li class="nav-item">
                <div class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">Personal Info</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                   aria-controls="nav-profile" aria-selected="false">Job Details</div>
            </li>
            <li class="nav-item">
                <div class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Documents</div>
            </li>
        </ul>
    
        <div class="tab-content p-4 bg-light border rounded-bottom" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $employesInfo['nombre'] }}</h5>
                        <p class="card-text">
                            <strong>Nombre:</strong> {{ $employesInfo['nombre'] }}<br>
                            <strong>Apellido Paterno:</strong> {{ $employesInfo['apellido_paterno'] }}<br>
                            <strong>Apellido Materno:</strong> {{ $employesInfo['apellido_materno'] }}<br>
                            <strong>Correo Electrónico:</strong> {{ $employesInfo['email'] }}<br>
                            <strong>Teléfono:</strong> {{ $employesInfo['telefono'] }}<br>
                            <strong>Dirección:</strong> {{ $employesInfo['direccion'] }}<br>
                            <strong>Foto de Perfil:</strong> 
                            <img src="{{ asset('storage/' . $employesInfo['foto_perfil']) }}"
                                 alt="Foto de perfil" class="img-thumbnail" width="100">
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $employesInfo['nombre'] }}</h5>
                        <p class="card-text">
                            <strong>Puesto:</strong> {{ $employesInfo['perfil'] }}<br>
                            <strong>Fecha de Contratación:</strong> {{ $employesInfo['fecha_contratacion'] }}<br>
                            <strong>Estatus:</strong> {{ $employesInfo['estatus'] }}<br>
                        </p>
                    </div>
                </div>
            </div>
    
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $employesInfo['nombre'] }}</h5>
                        <p class="card-text">
                            <strong>Actas Administrativas:</strong>
                            <input type="file" class="form-control mt-2" id="actas_administrativas" name="actas_administrativas">
                        </p>
                        <p class="card-text mt-4">
                            <strong>Observaciones:</strong>
                            <textarea name="observacion" id="observacion" class="form-control mt-2" rows="4" readonly>Lorem ipsum dolor sit, amet consectetur adipisicing elit...</textarea>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-bottom-form m-3">
        <a href="{{ route('employe.edit', $employesInfo['id']) }}" class="btn btn-warning"><i class="far fa-edit"></i></a>
        
        <form action="{{ route('employe.destroy', $employesInfo['id']) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></button>
        </form>
    </div>

   

@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
