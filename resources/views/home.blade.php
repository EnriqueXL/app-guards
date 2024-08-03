@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Home App')

@section('content')
    <div class="container-fluid">
    
        <div class= "description m-2 text-center">
            <h1>Sevicio de guardias de seguridad</h1>
            <p>
                Somos una empresa dedicada a la prestación de servicios de seguridad privada, con más de 20 años de experiencia en el mercado.
            </p>
        </div>

        {{-- Componentes de clase --}}
        {{-- <x-alert2 type="success" class="m-4">
            <x-slot name="title">
                Nuevo mensaje
            </x-slot>
            <p>Este es un mensaje de información</p>
        </x-alert2> --}}

        {{-- Componentes anonimos --}}
        <x-alert type="success" class="m-4">
            <x-slot name="title">
                Nuevo mensaje
            </x-slot>
            <p>Este es un mensaje de información</p>
        </x-alert>
    </div>
@endsection

@section('js')
    <script>
    //    alert('Home App');
    </script>
@endsection
