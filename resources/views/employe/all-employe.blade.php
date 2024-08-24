@extends('layouts.app')

@section('css')
    <style>
        /* css custom page */
    </style>
@endsection

@section('title', 'Listado de empleados')

@section('content')

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

        <x-table :headers="$headers" :employesInfo="$employesInfo" :employes="$employes">

        </x-table>
    </div>


@endsection

@section('js')
    <script>
        //    alert('Home App');
    </script>
@endsection
