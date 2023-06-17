
@extends('layouts.panel')
@section('content')
    <div class="">

        <h1 class="font-weight-bold">Bienvenido {{ auth()->user()->name }} {{ auth()->user()->lastname }}</h1>

    </div>
    <br>
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h6>¡Bienvenido/a al sistema de citas! Aquí podrás reservar, ver y
                         administrar tus citas de manera conveniente. Estamos aquí para brindarte una
                          experiencia fluida y asegurarnos de que tus mascotas reciban la atención que
                           necesitan. Reservar una cita es muy sencillo. Simplemente selecciona la fecha
                            y hora que mejor se ajuste a tu agenda y elige el motivo de la visita. Asegúrate
                            de proporcionar información precisa sobre tu mascota, como su nombre, especie, raza,
                            edad y peso, para que el veterinario pueda ofrecerle la atención adecuada.
                    </h6>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-6 mt-4 mb-4">
                <a href="/home-cliente" style="color:black">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <div class="chart">
                                <h1 style="text-align: center; color: white;">DashBoard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="">Dashboard</h6>
                        <p class="text-sm ">Interfaz gráfica que ayuda a los usuarios a visualizar indicadores clave en este
                            sistemas el apartado de gestionar horario y mis citas (confirmadas, pendientes y canceladas)</p>
                        <hr class="dark horizontal">

                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 mb-4">
                <a href="/reservarcitas/create" style="color:black">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Reservar cita</h1>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h6 class=""> Reservar cita </h6>
                            <p class="text-sm "> Asigne de forma individual la lista de tareas y horarios que debe
                                realizarse, asignando si es necesario el cliente, el proyecto, etc en el que se enmarca la
                                actuación.</p>
                            <hr class="dark horizontal">

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 mt-4 mb-3">
                <a href="/miscitas" style="color:black">
                    <div class="card z-index-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-info shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Mis Citas</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="">Mis citas</h6>
                            <p class="text-sm">En esta sección, podrás visualizar tanto tus citas pendientes como aquellas
                                que requieren confirmación. Mantener un registro de tus citas pendientes te ayudará a
                                planificar tu horario</p>
                            <hr class="dark horizontal">
                        </div>
                    </div>
                </a>
            </div><div class="col-lg-3 mt-4 mb-3">
                <a href="/pets-cliente" style="color:black">
                    <div class="card z-index-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Mis pets</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="">Mis mascotas</h6>
                            <p class="text-sm">En esta sección, podrás visualizar tanto tus citas pendientes como aquellas
                                que requieren confirmación. Mantener un registro de tus citas pendientes te ayudará a
                                planificar tu horario</p>
                            <hr class="dark horizontal">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endsection
