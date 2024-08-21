@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Listado de empleados')

@section('content')
    <div class="container">

        <div class= "description m-2 text-center">
            <h1>Listado de empleados</h1>
            <p>
                Aquí se muestra un listado de empleados registrados en el sistema.
            </p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
            

        <div>
            
            <x-table :headers="$headers" :employesInfo="$employesInfo">
            </x-table>
        </div>

    </div>
@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
