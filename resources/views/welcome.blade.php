<!-- <body background="{{asset('imagen/fondo.jpg')}}">  -->
@extends('layouts.app')

<title>Los Istmeños</title>

<link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="cardWelcome">
        
            


          <div class="welc">
            
        <form action="{{ url('prueba') }}" method="post">
        @csrf


            <div class="row">
                <div class="col-sm-3">

                    <label for="origen1" class="form-label"><span>Origen: </span></label>
                        <select name="origen1" id="origen1" class="form-select" >
                        <option selected=""> Seleccione el origen </option>
                        <option value="Salina Cruz, Oaxaca" > Salina Cruz, Oaxaca</option>
                        <option value="Tehuantepec" > Santo Domingo Tehuantepec</option>
                        <option value="Juchitán" > Juchitán </option>
                        <option value="unionHidalgo" > Unión Hidalgo</option>
                        <option value="matíasRomero" > Matías Romero</option>
                        <option value="Santa María Huatulco" > Santa María Huatulco </option>
  
                    </select>
                </div>

          

                <div class="col-sm-3">
                    <label for="destino1" class="form-label">Destino: </label>
                    <select name="destino1" id="destino1" class="form-select" >
                        <option selected=""> Seleccione el destino </option>
                        <option value="Salina Cruz, Oaxaca" > Salina Cruz, Oaxaca</option>
                        <option value="Tehuantepec" > Santo Domingo Tehuantepec</option>
                        <option value="Juchitán" > Juchitán </option>
                        <option value="unionHidalgo" > Unión Hidalgo</option>
                        <option value="matíasRomero" > Matías Romero</option>
                        <option value="Santa María Huatulco" > Santa María Huatulco </option>
                    </select>
                </div>
           
                    <div class="col-sm-3">
                        <label for="dia1" class="form-label">Fecha: </label>    
                     
                        <p><input type="date" id="dia1 "name="dia1" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"></p>
                    </div>

                <div class="col-sm-2 ">     
                    <br>
                 <!-- <a class="btn btn-primary" href="../detalle"> Buscar viaje</a>  -->
                    <button type="submit" class="btn btn-primary" >Buscar viaje</button>  
                    </div>
                </div>
      
            </div>
            <br>
            <br>
        </form>
            </div>
        </div>
    </div>
</div>

  <!--
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <img src="{{asset('imagen/salina.jpg')}}" style="height:250px; width:355px">
        </div>
        
        <div class="col-sm-4">
            <img src="{{asset('imagen/tehua.jpg')}}" style="height:250px; width:355px">
        </div>
    
        <div class="col-sm-4">
            <img src="{{asset('imagen/mercadoJuchitan.jpg')}}" style="height:250px; width:355px">
        </div>
    </div>
-->

<section class="post-list">
    <div class="contenta">
        <article class="post">
            <div class="post-header">
                <div class="post-img-1"></div>
            </div>
            <div class="post-body">
            <span>Parque Independencia</span>
            <h2>Salina Cruz, Oaxaca</h2>
            <br>
            <p>	
                Después de la conquista armada y espiritual del Istmo de Tehuantepec, Hernán Cortes descubrió la Ventosa y aprovechando la buena madera de sus bosques, construyó sus bergantines y se lanzó al Océano Pacífico, llegando a descubrir el Golfo del mar de Cortes y de California.</p>
            <a href="http://www.inafed.gob.mx/work/enciclopedia/EMM20oaxaca/municipios/20079a.html" class="post-link">Leer más</a>
            </div>
        </article>

        <article class="post">
            <div class="post-header">
                <div class="post-img-2"></div>
            </div>
            <div class="post-body">
            <span>Monumento a la Mujer Tehuana</span>
            <h2>Santo Domingo Tehuantepec</h2>
            <p>El  1496 se dio la batalla en que los ejércitos aliados mixtecos-zapotecas en contra del ejército azteca que comandaba el rey Ahuítzotl, esta batalla se dio en el lugar llamada Guie-Ngola, "Cerro o Piedra Grande".</p>
            <a href="http://www.inafed.gob.mx/work/enciclopedia/EMM20oaxaca/municipios/20515a.html" class="post-link">Leer más</a>
            </div>
        </article>

        <article class="post">
            <div class="post-header">
                <div class="post-img-3"></div>
            </div>
            <div class="post-body">
            <span>Mercado 5 de septiembre</span>
            <h2>Heroica Ciudad de Juchitán de Zaragoza</h2>
            <p>	
                Se funda en 1480 por soldados del monarca zapoteco Cosijopí y el Congreso Local lo declara municipio el 15 de marzo de 1825 por el decreto número 47 y 
                en el 1484 era conocido por los mexicanos con el nombre Ixta-Cuachititlán, que fue conquistado por axayacat rey de México.</p>
            <a href="http://www.inafed.gob.mx/work/enciclopedia/EMM20oaxaca/municipios/20043a.html" class="post-link">Leer más</a>
            </div>
        </article>

    </div>
</section>

@endsection
