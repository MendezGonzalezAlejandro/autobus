@extends('layouts.layout')
@section('content')  
    <br>
        <h3>Modificar Chofer</h3>
        <form action="{{ url('modificarChofer') }}" method="post">
        @csrf
        <input type="hidden" name="id" value"{{ $chofer->licencia}} ">

            Nombre: <input type:"text" name="nombre" value="{{ $chofer->nombre }}">
            <br>
            <br>
            Primer Apellido: <input type: "text" name="apellido1" value="{{ $chofer->apellido1 }}">
            Segundo Apellido: <input type: "text" name="apellido2" value="{{ $chofer->apellido2 }}">
            <br>
            <br>
            <br>

            <h2>Dirección</h2>

            Calle: <input type: "text" name="calle" value="{{ $chofer->calle }}">
            Colonia: <input type: "text" name="colonia" value="{{ $chofer->colonia }}">
            Número: <input type: "text" name="dir_numero" value="{{ $chofer->dir_numero }}">
            <br>
            <br>
            Número Telefónico: <input type: "text" name="numerotelefonico" value="{{ $chofer->numerotelefonico }}">
            idAutobus: <input type: "text" name="idAutobus" value="{{ $chofer->idAutobus }}">
            <br>
            <br>

            <input type="submit" name="actualizar" value="Actualizar">
        
        </form>

        <br>
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        
@endsection