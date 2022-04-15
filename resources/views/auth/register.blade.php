@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 row-cols-auto">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>
                @if ($errors->any())
    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
@endif
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="primer_apellido" class="col-md-4 col-form-label text-md-end">{{ __('Primer apellido') }}</label>

                            <div class="col-md-6">
                                <input id="primer_apellido" type="text" class="form-control @error('primer_apellido') is-invalid @enderror" name="primer_apellido" value="{{ old('primer_apellido') }}" required autocomplete="primer_apellido" autofocus>

                                @error('primer_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="segundo_apellido" class="col-md-4 col-form-label text-md-end">{{ __('Segundo apellido') }}</label>

                            <div class="col-md-6">
                                <input id="segundo_apellido" type="text" class="form-control @error('segundo_apellido') is-invalid @enderror" name="segundo_apellido" value="{{ old('segundo_apellido') }}" required autocomplete="segundo_apellido" autofocus>

                                @error('segundo_apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento">

                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contarseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sexo0" class="col-md-4 col-form-label text-md-end">Sexo</label>
                                <div class="col-md-6">
                                    <input id="sexo0" type="radio" class="form-check-input @error('sexo') is-invalid @enderror" name="sexo" value='femenino' required autocomplete="sexo">
                                    <label class="form-check-label" for="sexo0">Femenino  </label>
    
                                    @error('sexo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="sexo1" type="radio" class="form-check-input @error('sexo') is-invalid @enderror" name="sexo" value="masculino" required autocomplete="sexo">
                                    <label class="form-check-label" for="sexo1">Masculino   </label>
    
                                    @error('sexo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    

                                    <input id="sexo2" type="radio" class="form-check-input @error('sexo') is-invalid @enderror" name="sexo" value="prefiero no decirlo" required autocomplete="sexo">
                                    <label class="form-check-label" for="sexo2">Prefiero no decirlo   </label>
    
                                    @error('sexo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="rol0" class="col-md-4 col-form-label text-md-end">Rol</label>
                                <div class="col-md-6">
                                    <input id="sexo0" type="radio" class="form-check-input @error('rol') is-invalid @enderror" name="rol" value='Administrador' required autocomplete="rol">
                                    <label class="form-check-label" for="rol0">Administrador  </label>
    
                                    @error('rol')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <input id="rol1" type="radio" class="form-check-input @error('rol') is-invalid @enderror" name="rol" value="Cliente" required autocomplete="rol">
                                    <label class="form-check-label" for="rol1">Cliente   </label>
    
                                    @error('rol')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="estatus0" class="col-md-4 col-form-label text-md-end">Estatus</label>
                                    <div class="col-md-6">
                                        <input id="estatus0" type="radio" class="form-check-input @error('estatus') is-invalid @enderror" name="estatus" value='activo' required autocomplete="estatus">
                                        <label class="form-check-label" for="estatus0">Activo  </label>
        
                                        @error('estatus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
    
                                        <input id="estatus1" type="radio" class="form-check-input @error('estatus') is-invalid @enderror" name="estatus" value="inactivo" required autocomplete="estatus">
                                        <label class="form-check-label" for="estatus1">Inactivo   </label>
        
                                        @error('estatus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
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
