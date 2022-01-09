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
                <div class="card-header" style="text-align: center">{{ __('Regístrate') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <img src="{{asset('imagen/user.png')}}" class="ingresar" align="left" >
                        <div class="row mb-3">
                           <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __(' ') }}</label> -->

                            <div class="col-md-12">
                                <input id="name" placeholder=" Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                      <!--      <label for="email" class="col-md-4 col-form-label text-md-end">{{ __(' ') }}</label> -->

                            <div class="col-md-12">
                                <input id="email" placeholder=" Correo electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                       <!--     <label for="password" class="col-md-4 col-form-label text-md-end">{{ __(' ') }}</label> -->

                            <div class="col-md-12">
                                <input id="password" placeholder=" Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                     <!--       <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __(' ') }}</label>  -->

                            <div class="col-md-12">
                                <input id="password-confirm" placeholder=" Confirma la contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
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