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
                            <h3 style="letter-spacing: 3px;">Editar Mascota</h3>

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
                            <a href="{{ url('/pets') }}" class="btn btn-sm btn-info"><i class="fas fa-arrow-alt-circle-left"
                                    style="font-size:15px;"></i> Regresar</a>
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
                    <form action="{{ url('/pets/' . $pet->id) }}" method="POST" class="form"
                        style="display:flex; flex-direction:column;">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nombre de la mascota</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="name" class="form-control" value="{{ old('name', $pet->name) }}">
                        </div>
                        <div class="form-group">
                            <label for="especie">Especie</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="especie" class="form-control"
                                value="{{ old('especie', $pet->especie) }}">
                        </div>
                        <div class="form-group">
                            <label for="raza">Raza</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="raza" class="form-control" value="{{ old('raza', $pet->raza) }}">
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="number" name="edad" class="form-control" value="{{ old('edad', $pet->edad) }}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="genero">Género</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="genero" class="form-control" value="{{old('genero',$pet->genero)}}">

                                <form>
                                    <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline1" name="customRadio" class="custom-control-input">
                                          <label class="custom-control-label pmd-radio-ripple-effect" for="customRadioInline1">1</label>
                                    </div>
                                    <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline2" name="customRadio" class="custom-control-input">
                                          <label class="custom-control-label pmd-radio-ripple-effect" for="customRadioInline2">2</label>
                                    </div>
                                    <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                          <input type="radio" id="customRadioInline3" name="customRadio" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadioInline3">3</label>
                                    </div>
                                </form>
                        </div> --}}
                        <div class="form-group">
                            <label for="genero">Género</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="genero" class="form-control" id="genero-input"
                                value="{{ old('genero', $pet->genero) }}">

                            <div class="radio-inline"
                                style="display: flex;
                            align-items: center;">
                                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                    <input type="radio" id="macho-radio" name="genero-radio" class="custom-control-input"
                                         value="Macho">
                                    <label class="custom-control-label pmd-radio-ripple-effect" style="margin-right: 10px;"
                                        for="macho-radio">Macho</label>
                                </div>

                                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                    <input type="radio" id="hembra-radio" name="genero-radio" class="custom-control-input"
                                         value="Hembra">
                                    <label class="custom-control-label pmd-radio-ripple-effect" style="margin-right: 10px;"
                                        for="hembra-radio">Hembra</label>
                                </div>
                            </div>
                        </div>


                        <script>
                            const generoInput = document.getElementById('genero-input');
                            const machoRadio = document.getElementById('macho-radio');
                            const hembraRadio = document.getElementById('hembra-radio');

                            machoRadio.addEventListener('change', function() {
                                if (this.checked) {
                                    generoInput.value = 'Macho';
                                }
                            });

                            hembraRadio.addEventListener('change', function() {
                                if (this.checked) {
                                    generoInput.value = 'Hembra';
                                }
                            });
                        </script>

                        <div class="form-group">
                            <label for="tamaño">Tamaño</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="tamaño" class="form-control" id="tamaño-input"
                                value="{{ old('tamaño', $pet->tamaño) }}">

                            <div class="radio-inline"
                                style="display: flex;
                            align-items: center;">
                                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                    <input type="radio" id="pequeño-radio" name="tamaño-radio"
                                        class="custom-control-input" value="Pequeño">
                                    <label class="custom-control-label pmd-radio-ripple-effect" style="margin-right: 10px;"
                                        for="pequeño-radio">Pequeño</label>
                                </div>

                                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                    <input type="radio" id="mediano-radio" name="tamaño-radio"
                                        class="custom-control-input" value="Mediano">
                                    <label class="custom-control-label pmd-radio-ripple-effect"
                                        style="margin-right: 10px;" for="mediano-radio">Mediano</label>
                                </div>

                                <div class="custom-control custom-radio pmd-radio custom-control-inline">
                                    <input type="radio" id="grande-radio" name="tamaño-radio"
                                        class="custom-control-input" value="Grande">
                                    <label class="custom-control-label pmd-radio-ripple-effect"
                                        style="margin-right: 10px;" for="grande-radio">Grande</label>
                                </div>
                            </div>
                        </div>
                        <script>
                            const tamañoInput = document.getElementById('tamaño-input');
                            const pequeñoRadio = document.getElementById('pequeño-radio');
                            const medianoRadio = document.getElementById('mediano-radio');
                            const grandeRadio = document.getElementById('grande-radio');

                            pequeñoRadio.addEventListener('change', function() {
                                if (this.checked) {
                                    tamañoInput.value = 'Pequeño';
                                }
                            });

                            medianoRadio.addEventListener('change', function() {
                                if (this.checked) {
                                    tamañoInput.value = 'Mediano';
                                }
                            });

                            grandeRadio.addEventListener('change', function() {
                                if (this.checked) {
                                    tamañoInput.value = 'Grande';
                                }
                            });
                        </script>
                        <div class="form-group">
                            <label for="peso">Peso</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="peso" class="form-control"
                                value="{{ old('peso', $pet->peso) }}">
                        </div>

                        <div class="form-group">
                            <label for="id_user">Propietario</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="id_user" class="form-control"
                                value="{{ old('id_user', $pet->id_user) }}">
                        </div>

                         {{-- <div class="form-group">
                            <label for="id_user">Propietario</label>
                            <select name="id_user" class="form-control">
                                <option value="">Seleccionar propietario</option>
                                @foreach($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ old('id_user', $pet->id_user) == $cliente->id ? 'selected' : '' }}>
                                    {{ $cliente->nombre }}
                                </option>
                                @endforeach
                            </select>
                        </div> 
                         --}}

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
