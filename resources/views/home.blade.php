@extends('layouts.layout')
@section('post','Home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido!') }}
                    
                    <br>
<!--
                    <a href="{{ url('/Alta') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Agregar autobus</a>
                    <a href="{{ url('/Mostrar') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mostrar autobuses</a>
                    
                    <br>
                    <a href="{{ url('/Chofer') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Agregar Choferes</a>
                    <a href="{{ url('/mostrarChofer') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Mostrar Choferes</a>
-->
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection



