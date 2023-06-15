<?php
use Illuminate\Support\Str;
?>

@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h3 style="letter-spacing: 3px;">Editar Médico</h3>

                        </div>
                        {{-- <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v text-secondary"></i>
                                </a>
                                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a>
                                    </li>
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else
                                            here</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="{{ url('/medicos') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-arrow-alt-circle-left" style="font-size:15px;"></i> Regresar</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert" style="color:white;">
                                <i style="color:white;" class="fas fa-exclamation-triangle"></i>
                                <strong style="color:white;">Por favor!</strong> {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form action="{{ url('/medicos/' . $doctor->id) }}" method="POST" class="form"
                        style="display:flex; flex-direction:column;">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nombre del medico</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="name" class="form-control" value="{{ old('name', $doctor->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellidos</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="lastname" class="form-control"
                                value="{{ old('lastname', $doctor->lastname) }}">
                        </div>
                        <div class="form-group">


                            <label for="specialties">Especialidades</label>

                            <!--LINKS -->
                            <link rel="stylesheet"
                                href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
                            <link rel="stylesheet"
                                href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


                            <!-- SCRIPTS -->
                            <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
                            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
                            </script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>

                            <script>
                                $(document).ready(() => {
                                    $('#specialties').selectpicker('val', @json($specialty_ids));
                                });
                            </script>


                            <select name="specialties[]" id="specialties" class="form-control selectpicker"
                                data-style="btn-dark" title="Seleccionar especialidades" multiple required>
                                @foreach ($specialties as $especialidad)
                                    <option value="{{ $especialidad->id }}">{{ $especialidad->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="phone" class="form-control" value="{{ old('phone', $doctor->phone) }}"
                                minlength="9" maxlength="9">
                        </div>
                        <div class="form-group">
                            <label for="location">Dirección</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="location" class="form-control"
                                value="{{ old('location', $doctor->location) }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="email" name="email" class="form-control"
                                value="{{ old('email', $doctor->email) }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="password" class="form-control">
                            <small class="text-warning">Solo llena el campo si desea cambiar la contraseña</small>
                        </div>
                        <div class="d-flex justify-content-end"
                            style="display: block;
                        margin-top: 20px;">
                            <button style="
                                color: #fff;" type="submit"
                                class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
