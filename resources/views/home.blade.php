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
                    <h6>¡Bienvenido/a al sistema de gestión para Administradores! Aquí tendrás
                         acceso a diversas funcionalidades para administrar eficientemente el flujo de trabajo en la clínica veterinaria.
                         Estamos aquí para ayudarte a mantener todo organizado y brindarte las herramientas necesarias para una gestión eficaz.
                          Como administrador, tendrás la capacidad de realizar una variedad de tareas para garantizar el correcto funcionamiento de la clínica veterinaria.
                    </h6>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <a href="/home" style="color:black">
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
                        <p class="text-m ">Interfaz gráfica que ayuda a los usuarios a visualizar indicadores clave en este
                            sistemas el apartado de gestionar especialidades, médicos, clientes, mascotas, etc.</p>
                        <hr class="dark horizontal">

                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <a href="{{ url('especialidades') }}" style="color:black">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Especialidades</h1>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h6 class=""> Especialidades </h6>
                            <p class="text-m "> La sección de especialidades en el sistema
                                 de gestión de la clínica veterinaria te permite administrar
                                 y organizar las distintas áreas de especialización médica disponibles en la clínica.</p>
                            <hr class="dark horizontal">

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mt-4 mb-3">
                <a href="/medicos" style="color:black">
                    <div class="card z-index-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Médicos</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="">Médicos</h6>
                            <p class="text-m">La sección de médicos en el sistema de gestión de la clínica
                                veterinaria te permite administrar y organizar la información
                                 relacionada con los profesionales médicos que trabajan en la veterinaria.</p>
                            <hr class="dark horizontal">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <a href="/clientes" style="color:black">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient-warning shadow-primary border-radius-lg py-3 pe-1">
                            <div class="chart">
                                <h1 style="text-align: center; color: white;">Clientes</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="">Clientes</h6>
                        <p class="text-m ">La sección de clientes en el sistema de gestión de la clínica veterinaria
                             te permite administrar y organizar la información relacionada con los clientes. </p>
                        <hr class="dark horizontal">

                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <a href="/pets" style="color:black">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-info shadow-success border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Mascota</h1>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h6 class="">Mascota </h6>
                            <p class="text-m "> La sección de mascotas en el sistema de gestión de la clínica
                                 veterinaria te permite administrar y organizar la información relacionada con las
                                  mascotas de los clientes. </p>
                            <hr class="dark horizontal">

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mt-4 mb-3">
                <a href="" style="color:black">
                    <div class="card z-index-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-secondary shadow-dark border-radius-lg py-3 pe-1">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Adopción</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="">Adopción</h6>
                            <p class="text-m">La sección de adopción en el sistema de gestión de la clínica veterinaria te
                                permite administrar y organizar la información relacionada con los procesos de adopción de mascotas.</p>
                            <hr class="dark horizontal">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <a href="/miscitas" style="color:black">
                <div class="card z-index-2 ">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient shadow border-radius-lg py-3 pe-1" style="background:skyblue;">
                            <div class="chart">
                                <h1 style="text-align: center; color: white;">Citas Médicas</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="">Citas Médicas</h6>
                        <p class="text-m ">La sección de Citas Médicas en el sistema de gestión de la clínica veterinaria te permite administrar y organizar las citas programadas para los pacientes. </p>
                        <hr class="dark horizontal">

                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <a href="{{url('/reportes/citas/line')}}" style="color:black">
                    <div class="card z-index-2  ">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1" style="background:#766FD1;">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Citas</h1>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <h6 class=""> Citas </h6>
                            <p class="text-m "> La sección de Reporte de Citas en el sistema de gestión de la clínica veterinaria te permite generar informes y estadísticas relacionadas con las citas médicas realizadas.</p>
                            <hr class="dark horizontal">

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mt-4 mb-3">
                <a href="{{url('/reportes/doctors/columns')}}" style="color:black">
                    <div class="card z-index-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                            <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1" style="background:#9E6A29;">
                                <div class="chart">
                                    <h1 style="text-align: center; color: white;">Desempeño Médico</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="">Desempeño Médico</h6>
                            <p class="text-m">Esta sección es fundamental para monitorear la eficiencia y la calidad de la atención médica que brindan, así como para identificar áreas de mejora y reconocer el trabajo destacado.</p>
                            <hr class="dark horizontal">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endsection
