
@extends('layouts.app')

<title>Los Istmeños</title>
<link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@section('content')

      
<form action="{{ url('Compra') }}" method="post">
        @csrf

<div class="containerV">
  <div class="informacion">
      
    <div class="salida">
        <div class="card-bodyV">
                <input type="hidden" name="idcorrida" value="{{ $detalle->idcorrida }}">
                <label for='nombreE' ><b>Los istmeños</b> </label>
                <br>
                <label for='horaSalida' >Hora de Salida: </label>
                <label for='horaSalida' >{{ $detalle->horaSalida }} h</label>
                <br>
                <label for='origen1' >Origen: </label>
                <label for='origen1' >{{ $detalle->origen }}</label>
                <br>
                <label for='destino1' >Destino: </label>
                <label for='destino1' >{{ $detalle->destino }}</label>

                <br>
                <label for='precio' >Costo de viaje: </label>
                <label for='precio' >$ {{ $detalle->precio }}</label>
        </div>
                
    </div>
  </div>
  <div class="ventaBoleto">
      <h2 style="text-align: center;">Seleccione su asiento: </h2>
      <select name="asiento" id="asiento" class="form-select" style="height:35px; width:190px" >
                        <option selected=""> Seleccione el asiento </option>
                        <option value="1" > 1</option>
                        <option value="2" > 2</option>
                        <option value="3" > 3 </option>
                        <option value="4" > 4</option>
                        <option value="5" > 5</option>
                        <option value="6" > 6 </option>
                        <option value="7" > 7 </option>
                        <option value="8" > 8 </option>
                        <option value="9" > 9 </option>
                        <option value="10" > 10 </option>
                        <option value="11" > 11 </option>
                        <option value="12" > 12 </option>
                        <option value="13" > 13 </option>
                        <option value="14" > 14 </option>
                        <option value="15" > 15 </option>
                        <option value="16" > 16 </option>
                        <option value="17" > 17 </option>
                        <option value="18" > 18 </option>
                        <option value="19" > 19 </option>
                        <option value="20" > 20 </option>
                        <option value="21" > 21 </option>
                        <option value="22" > 22 </option>
                        <option value="23" > 23 </option>
                        <option value="24" > 24 </option>
                        <option value="25" > 25 </option>
                    </select>
    <div class="formularioP">

                    
        
            <label for="nombre">Nombre(s)*</label>
            <input id="nombre" type='text' style="height:35px; width:190px" placeholder="NOMBRE DEL PASAJERO" name="nombre">
            <label for="apellido">Apellidos(s)*</label>
            <input id="apellido" type='text' style="height:35px; width:230px" placeholder="APELLIDO DEL PASAJERO" name="apellido" >
            <input type="submit" name="botonB" class="btn btn-success" value="Continuar">
            <a class="btn btn-warning" href="../Boleto/">Imprimir boleto</a>
    </div>
    <div class="asientoEnmedio">
      <div class="a4"><img src="{{asset('imagen/libre12.png')}}" class="asiento" ></div>
      <div class="b4"><img src="{{asset('imagen/libre11.png')}}" class="asiento" ></div>
      <div class="a5"><img src="{{asset('imagen/libre16.png')}}" class="asiento" ></div>
      <div class="b5"><img src="{{asset('imagen/libre15.png')}}" class="asiento" ></div>
      <div class="a6"><img src="{{asset('imagen/libre20.png')}}" class="asiento" ></div>
      <div class="b6"><img src="{{asset('imagen/libre19.png')}}" class="asiento" ></div>
    </div>
    <div class="asientoEnfrente">
      <div class="a1"></div>
      <div class="a2"><img src="{{asset('imagen/libre4.png')}}" class="asiento" ></div>
      <div class="a3"><img src="{{asset('imagen/libre8.png')}}" class="asiento" ></div>
      <div class="b1"></div>
      <div class="b2"><img src="{{asset('imagen/libre3.png')}}" class="asiento" ></div>
      <div class="b3"><img src="{{asset('imagen/libre7.png')}}" class="asiento" ></div>
    </div>
    <div class="asientoAtras">
      <div class="a7"><img src="{{asset('imagen/libre24.png')}}" class="asiento" ></div>
      <div class="a8"><img src="{{asset('imagen/libre28.png')}}" class="asiento" ></div>
      <div class="a9"><img src="{{asset('imagen/libre32.png')}}" class="asiento" ></div>
      <div class="b7"><img src="{{asset('imagen/libre23.png')}}" class="asiento" ></div>
      <div class="b8"><img src="{{asset('imagen/libre27.png')}}" class="asiento" ></div>
      <div class="b9"><img src="{{asset('imagen/libre31.png')}}" class="asiento" ></div>
    </div>
  </div>
  <div class="asientoAbajo">
    <div class="AsientoDerecha">
      <div class="c1"></div>
      <div class="c2"><img src="{{asset('imagen/libre2.png')}}" class="asiento" ></div>
      <div class="c3"><img src="{{asset('imagen/libre6.png')}}" class="asiento" ></div>
      <div class="d1"><img src="{{asset('imagen/volante.png')}}" class="volante" ></div>
      <div class="d3"><img src="{{asset('imagen/libre5.png')}}" class="asiento" ></div>
      <div class="d2"><img src="{{asset('imagen/libre1.png')}}" class="asiento" ></div>
    </div>
    <div class="AsientoDerechaE">
      <div class="d5"><img src="{{asset('imagen/libre13.png')}}" class="asiento" ></div>
      <div class="d6"><img src="{{asset('imagen/libre17.png')}}" class="asiento" ></div>
      <div class="c5"><img src="{{asset('imagen/libre14.png')}}" class="asiento" ></div>
      <div class="c6"><img src="{{asset('imagen/libre18.png')}}" class="asiento" ></div>
      <div class="d4"><img src="{{asset('imagen/libre9.png')}}" class="asiento" ></div>
      <div class="c4"><img src="{{asset('imagen/libre10.png')}}" class="asiento" ></div>
    </div>
    <div class="AsientoDerechaA">
      <div class="d7"><img src="{{asset('imagen/libre21.png')}}" class="asiento" ></div>
      <div class="d8"><img src="{{asset('imagen/libre25.png')}}" class="asiento" ></div>
      <div class="d9"><img src="{{asset('imagen/libre29.png')}}" class="asiento" ></div>
      <div class="c7"><img src="{{asset('imagen/libre22.png')}}" class="asiento" ></div>
      <div class="c8"><img src="{{asset('imagen/libre26.png')}}" class="asiento" ></div>
      <div class="c9"><img src="{{asset('imagen/libre30.png')}}" class="asiento" ></div>
    </div>
  </div>
</div>

</form>

@endsection


