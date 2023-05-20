@extends('layouts.form')


@section('title', 'Registro')


@section('content')

    <body class="bg-gray-200">

        <main class="main-content  mt-0">

            <div class="page-header align-items-start min-vh-100"
                style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
                {{-- <span class="mask bg-gradient-dark opacity-6"></span> --}}
                <div class="container my-auto">
                    <br>
                    <div class="row">

                        <div class="col-lg-4 col-md-10 col-12 mx-auto">
                            <div class="card z-index-0 fadeIn3 fadeInBottom">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Registro</h4>
                                        <div class="row mt-3">
                                            <div class="col-2 text-center ms-auto">
                                                <a class="btn btn-link px-3" href="javascript:;">
                                                    <i class="fa fa-facebook text-white text-lg"></i>
                                                </a>
                                            </div>
                                            <div class="col-2 text-center px-1">
                                                <a class="btn btn-link px-3" href="javascript:;">
                                                    <i class="fa fa-github text-white text-lg"></i>
                                                </a>
                                            </div>
                                            <div class="col-2 text-center me-auto">
                                                <a class="btn btn-link px-3" href="javascript:;">
                                                    <i class="fa fa-google text-white text-lg"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="card-header">
                                            <h4 class="mb-0">Se encontro el siguiente error</h4>
                                        </div>
                                        <div class="alert alert-danger" role="alert" style="color:white;">
                                            {{ $errors->first() }}
                                        </div>
                                        <script>
                                            setTimeout(function() {
                                                location.reload(); // Recargar la página después de 5 segundos
                                            }, 5000);
                                        </script>
                                        {{-- @else
                                    <div class="card-header">
                                        {{-- <h4 class="font-weight-bolder">Iniciar Sesion</h4> 
                                        <p class="mb-0">Ingresa tus datos</p>
                                    </div> --}}
                                    @endif
                                    <form role="form" class="text-start" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="input-group input-group-outline my-0">
                                            <label class="form-label">Nombre</label>
                                            <input type="name" class="form-control" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Apellidos</label>
                                            <input type="text" class="form-control" name="lastname"
                                                value="{{ old('lastname') }}">
                                        </div>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Telefono</label>
                                            <input type="text" class="form-control" name="phone" minlength="9"
                                                maxlength="9" value="{{ old('phone') }}">
                                        </div>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Ubicacion</label>
                                            <input type="text" class="form-control" name="location"
                                                value="{{ old('location') }}">
                                        </div>
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" required
                                                autocomplete="new-password">
                                        </div>
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Repet Password</label>
                                            <input type="password" class="form-control" name="password_confirmation"
                                                required autocomplete="new-password">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-primary w-100 my-1 mb-2">Registrarse</button>
                                        </div>
                                        <p class="mt-4 text-sm text-center">
                                            Ya tienes una cuenta?
                                            <a href="{{ route('login') }}"
                                                class="text-primary text-gradient font-weight-bold">Iniciar Sesion</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer position-absolute bottom-2 py-2 w-100">
                    <div class="container">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-12 col-md-6 my-auto">
                                <div class="copyright text-center text-sm text-white text-lg-start">
                                    ©
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>,
                                    made with <i class="fa fa-heart" aria-hidden="true"></i> by
                                    <a href="#" class="font-weight-bold text-white"
                                        target="_blank">Software UTP</a>
                                    for a better web.
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white" target="_blank">Creative Tim</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link text-white" target="_blank">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=="#" class="nav-link text-white" target="_blank">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link pe-0 text-white" target="_blank">License</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </main>
        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
    </body>
@endsection
