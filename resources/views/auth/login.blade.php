@extends('layouts.form')

@section('title','Iniciar Sesion')

@section('content')
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div
                        class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('{{ asset('img/illustrations/registro_img.jpg') }}'); background-size: cover;">
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card card-plain">

                            @if ($errors->any())
                                <div class="card-header" Style="color:white;">
                                    <h4 class="mb-0">Se encontro el siguiente error</h4>
                                </div>
                                <div class="alert alert-danger" role="alert" Style="color:white;">
                                    Estas credenciales no coindicen en nuestra Base de Datos
                                </div>
                            @else
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">Iniciar Sesion</h4>
                                    <p class="mb-0">Ingresa tu email y contraseña para acceder </p>
                                </div>
                            @endif
                            {{-- <div class="card-header">
                                <h4 class="font-weight-bolder">Iniciar Sesion</h4>
                                <p class="mb-0">Ingresa tu email y contraseña para ingresar </p>
                            </div> --}}
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" name="password" required
                                            autocomplete="current-password">
                                    </div>
                                    <div class="form-check form-check-info text-start ps-0">
                                        <input name="remember" class="form-check-input" type="checkbox" value=""
                                            id="remember" checked {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Recordar<a href="javascript:;" class="text-dark font-weight-bolder">
                                                Sesion</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"
                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Empezar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    <a href="{{ route('password.request') }}"
                                        class="text-primary text-gradient font-weight-bold">Olvidaste tu contraseña</a>
                                </p>
                                <p class="mb-2 text-sm mx-auto">
                                    ¿No tiene una cuenta?
                                    <a href="{{ route('register') }}"
                                        class="text-primary text-gradient font-weight-bold">Registrarse</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
