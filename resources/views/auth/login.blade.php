<body background="{{asset('imagen/fondo.jpg')}}">
@extends('layouts.app')

<title>Los Istmeños</title>
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center">{{ __('Ingresar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div style="text-align: center;">
                        <img src="{{asset('imagen/user.png')}}" class="ingresar" >
                        <br>
                        <br>
                        </div>

                        <div class="row mb-3">
                            <!--Correo electronico-->
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __(' ') }}</label>

                            <div class="col-md-6">
                                <input id="email" placeholder=" Correo electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <!-- Contraseña-->
                            
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __(' ') }}</label>

                            <div class=" col-md-6">
                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder=" Contraseña" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                          <!--  <div class="col-md-8 offset-md-4"> -->
                            <div style="text-align: center;">
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                     
                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


