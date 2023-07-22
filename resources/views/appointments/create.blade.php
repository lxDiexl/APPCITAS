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
                            <h3 style="letter-spacing: 3px;">Registrar Nueva Cita ♥</h3>

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
                            <a href="{{ url('/clientes') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-arrow-alt-circle-left" style="font-size:15px;"></i> Regresar</a>
                        </div>
                    </div>

                </div>

                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



                <script>
                    $(function() {
                        $(".datepicker").datepicker();
                    });
                </script>

                <script>
                    let $doctor;


                    $(function() {
                        const $specialty = $('#specialty');
                        $doctor = $('#doctor')
                        $specialty.change(() => {
                            const specialtyId = $specialty.val();
                            const url = `/especialidades/${specialtyId}/medicos`;
                            $.getJSON(url, onDoctorsLoaded);
                        });
                    });

                    function onDoctorsLoaded(doctors) {
                        let htmlOptions = '';
                        doctors.forEach(doctor => {
                            htmlOptions += `<option value="${doctor.id}">${doctor.name}</option>`;
                        });
                        $doctor.html(htmlOptions);
                    }

                    let $date;

                    $(function() {
                        $doctor = $("#doctor");
                        $date = $('#date');


                        $doctor.change(loadHours);
                        $date.change(loadHours);

                    });

                    function loadHours() {
                        const selectedDate = $date.val();
                        const doctorId = $doctor.val();
                        console.log("selectedDate:", selectedDate);
                        console.log("doctorId:", doctorId);

                        const url = `/horario/horas?date=${selectedDate}&doctor_id=${doctorId}`;

                        $.getJSON(url, displayHours);
                    }

                    let $hoursMorning, $hoursAfternoon, $titleMorning, $titleAfternoon;

                    const titleMorning = `En la mañana`;
                    const titleAfternoon = `En la tarde`;

                    const noHours = `<h5 class="text-danger">No hay horarios disponibles</h5>`
                    $(function() {
                        $titleMorning = $('#titleMorning');
                        $hoursMorning = $('#hoursMorning');
                        $titleAfternoon = $('#titleAfternoon');
                        $hoursAfternoon = $('#hoursAfternoon');
                    });


                    function displayHours(data) {
                        let htmlHoursM = '';
                        let htmlHoursA = '';

                        if (data.morning) {
                            const morning_invervalos = data.morning;
                            morning_invervalos.forEach(intervalo => {
                                htmlHoursM += getRadioIntervaloHTML(intervalo);
                            });
                        }
                        if (!htmlHoursM != "") {
                            htmlHoursM += noHours;
                        }

                        if (data.afternoon) {
                            const afternoon_invervalos = data.afternoon;
                            afternoon_invervalos.forEach(intervalo => {
                                htmlHoursA += getRadioIntervaloHTML(intervalo);
                            });
                        }

                        if (!htmlHoursA != "") {
                            htmlHoursA += noHours;
                        }

                        $hoursMorning.html(htmlHoursM);
                        $hoursAfternoon.html(htmlHoursA);
                        $titleMorning.html(titleMorning);
                        $titleAfternoon.html(titleAfternoon);

                    }


                    let iRadio = 0; // Inicialización de iRadio

                    function getRadioIntervaloHTML(intervalo) {
                        const text = `${intervalo.start} - ${intervalo.end}`;

                        return `<div class="form-check " >
  <input class="form-check-input" type="radio" name="scheduled_time" id="interval${iRadio}" value="${intervalo.start}" >
  <label class="form-check-label" for="interval${iRadio++}" style="display: inline-block; margin-left: 10px;">
    ${text}
  </label>
</div>`;
                    }

                    var secondValue = document.getElementById("second-value").value;
                    // Utiliza el segundo valor según tus necesidades

                    // Llamada a la función getRadioIntervaloHTML() u otras operaciones donde se utiliza iRadio
                </script>

                <style>
                    [type="date"] {
                        background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
                    }

                    [type="date"]::-webkit-inner-spin-button {
                        display: none;
                    }

                    [type="date"]::-webkit-calendar-picker-indicator {
                        opacity: 0;
                    }

                    /* custom styles */

                    label {
                        display: block;
                    }

                    input {
                        border: 1px solid #c4c4c4;
                        border-radius: 5px;
                        background-color: #fff;
                        padding: 3px 5px;
                        box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
                        width: 190px;
                    }

                    .modalDialog {
                        position: fixed;
                        font-family: Arial, Helvetica, sans-serif;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        background: rgba(0, 0, 0, 0.8);
                        z-index: 99999;
                        opacity: 0;
                        -webkit-transition: opacity 400ms ease-in;
                        -moz-transition: opacity 400ms ease-in;
                        transition: opacity 400ms ease-in;
                        pointer-events: none;
                    }

                    .modalDialog:target {
                        opacity: 1;
                        pointer-events: auto;
                    }

                    .modalDialog>div {
                        width: 800PX;
                        position: relative;
                        margin: 10% auto;
                        padding: 5px 20px 13px 20px;
                        border-radius: 10px;
                        background: #fff;
                        background: -moz-linear-gradient(#fff, #999);
                        background: -webkit-linear-gradient(#fff, #999);
                        background: -o-linear-gradient(#fff, #999);
                        -webkit-transition: opacity 400ms ease-in;
                        -moz-transition: opacity 400ms ease-in;
                        transition: opacity 400ms ease-in;
                    }

                    .close {
                        background: #606061;
                        color: #FFFFFF;
                        line-height: 25px;
                        position: absolute;
                        right: -12px;
                        text-align: center;
                        top: -10px;
                        width: 24px;
                        text-decoration: none;
                        font-weight: bold;
                        -webkit-border-radius: 12px;
                        -moz-border-radius: 12px;
                        border-radius: 12px;
                        -moz-box-shadow: 1px 1px 3px #000;
                        -webkit-box-shadow: 1px 1px 3px #000;
                        box-shadow: 1px 1px 3px #000;
                    }

                    .close:hover {
                        background: #00d9ff;
                    }

                    .centered-link {
                        display: flex;
                        justify-content: center;
                        margin-top: 20px;
                        padding-bottom: 20px;
                    }

                    .centered-link a {
                        color: #fff;
                        text-decoration: none;
                        font-weight: bold;
                        padding: 15px;
                        background: black;
                        border-radius: 15px;
                    }
                </style>

                <div class="card-body">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert" style="color:white;">
                                <i style="color:white;" class="fas fa-exclamation-triangle"></i>
                                <strong style="color:white;">Por favor!</strong> {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form action="{{ url('/reservarcitas') }}" method="POST" class="form"
                        style="display:flex; flex-direction:column;">
                        @csrf

                        <div class="row ">
                            <div class="form-group col-md-6">
                                <label for="specialty">Especialidad / Servicio</label>
                                <select
                                    style="padding: 0.5rem;
                                    border-radius: 0.25rem;
                                    border: 1px solid #ced4da;
                                    background-color: #fff;
                                    width: 100%;
                                    font-size: 1rem;
                                    line-height: 1.5;
                                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                    name="specialty_id" id="specialty" class="form-control">
                                    <option value="">Seleccionar Campo</option>
                                    @foreach ($specialties as $especialidad)
                                        <option value="{{ $especialidad->id }}"
                                            @if (old('specialty_id') == $especialidad->id) selected @endif>
                                            {{ $especialidad->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctor">Veterinario</label>
                                <select
                                    style="padding: 0.5rem;
                                    border-radius: 0.25rem;
                                    border: 1px solid #ced4da;
                                    background-color: #fff;
                                    width: 100%;
                                    font-size: 1rem;
                                    line-height: 1.5;
                                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                    name="doctor_id" id="doctor" class="form-control" required>
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}"
                                            @if (old('doctor_id') == $doctor->id) selected @endif>
                                            {{ $doctor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>






                        <div class="form-group">
                            <label for="date">Fecha</label>
                            <div class="form-group">
                                <div class="input-group">
                                    <input placeholder="Seleccionar Fecha" type="date" name="scheduled_date"
                                        id="date"
                                        value="{{ old('scheduled_date') ? old('scheduled_date') : date('Y-m-d') }}"
                                        data-date-format="yyyy-mm-dd" data-date-start-date="{{ date('Y-m-d') }}"
                                        data-date-end-date="+30d" style="color:black;">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <label for="hours">Hora de atención</label>

                            <div class="row" style="background:#D2EFE3; border-radius:20px;">
                                <div class="col">
                                    <h4 class="m-3" id="titleMorning"></h4>
                                    <div id="hoursMorning">
                                        @if ($intervals)
                                            <h4 class="m-3">En la mañana</h4>
                                            @foreach ($intervals['morning'] as $key => $interval)
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="radio" name="scheduled_time"
                                                        id="intervalMorning{{ $key }}"
                                                        value="{{ $interval['start'] }}">
                                                    <label class="form-check-label"
                                                        for="intervalMorning{{ $key }}"
                                                        style="display: inline-block; margin-left: 10px;">
                                                        {{ $interval['start'] }} - {{ $interval['end'] }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @else
                                            <mark style="background:#D2EFE3; border-radius:20px;">
                                                <small class="text-warning display-15">
                                                    Selecciona un médico para ver una fecha y hora.
                                                </small>
                                            </mark>
                                        @endif
                                    </div>
                                </div>
                                <div class="col">
                                    <h4 class="m-3" id="titleAfternoon"></h4>
                                    <div id="hoursAfternoon">

                                        @if ($intervals)
                                            <h4 class="m-3">En la tarde</h4>
                                            @foreach ($intervals['afternoon'] as $key => $interval)
                                                <div class="form-check ">
                                                    <input class="form-check-input" type="radio" name="scheduled_time"
                                                        id="intervalAfternoon{{ $key }}"
                                                        value="{{ $interval['start'] }}">
                                                    <label class="form-check-label"
                                                        for="intervalAfternoon{{ $key }}"
                                                        style="display: inline-block; margin-left: 10px;">
                                                        {{ $interval['start'] }} - {{ $interval['end'] }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="type">Tipo de consulta</label>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="type" id="type1"
                                    @if (old('type') == 'Consulta') checked @endif value="Consulta">
                                <label class="form-check-label" for="type1"
                                    style="display: inline-block; margin-left: 10px;">
                                    Consulta
                                </label>
                            </div>

                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="type" id="type2"
                                    @if (old('type') == 'Examen') checked @endif value="Examen">
                                <label class="form-check-label" for="type2"
                                    style="display: inline-block; margin-left: 10px;">
                                    Examen
                                </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="type" id="type3"
                                    @if (old('type') == 'Operación') checked @endif value="Operación">
                                <label class="form-check-label" for="type3"
                                    style="display: inline-block; margin-left: 10px;">
                                    Operación
                                </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="type" id="type4"
                                    @if (old('type') == 'Baño') checked @endif value="Baño">
                                <label class="form-check-label" for="type4"
                                    style="display: inline-block; margin-left: 10px;">
                                    Baño
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Síntomas</label>
                            <textarea name="description" id="description" type="text" class="form-control" rows="5"
                                placeholder="Descripción breve" style="border: 1px solid black"></textarea>
                        </div>
                </div>


                <div class="centered-link">
                    <a href="#openModal">Guardar cita</a>
                </div>

<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Close" class="close">X</a>
        <h2>CONFIRMAR CITA</h2>
        <p id="precioEstimado" style="color:black; font-size:20px;">Precio estimado: </p>
        <p style="color:black; font-size:20px;">Nos complace atenderte y estamos comprometidos a brindarte un servicio de calidad. Si tienes alguna pregunta, no dudes en contactarnos.</p>
        <p style="color:black; font-size:20px;">Esperamos verte pronto y proporcionarte la mejor experiencia posible. ¡Gracias por elegirnos!</p>
        <p style="color:black; font-size:20px;">Saludos cordiales, Social Pet's</p>
        <div class="d-flex justify-content-center" style="display: block; margin-top: 20px;">
            <button style="color: #fff;" type="submit" class="btn btn-primary">Aceptar Cita</button>
        </div>
    </div>
</div>

<script>
    var typeRadios = document.getElementsByName('type');
    var precioEstimadoElement = document.getElementById('precioEstimado');

    for (var i = 0; i < typeRadios.length; i++) {
        typeRadios[i].addEventListener('change', function() {
            var tipoConsulta = this.value;
            var precioEstimado = obtenerPrecioEstimado(tipoConsulta);
            precioEstimadoElement.textContent = 'Precio estimado: S/. ' + precioEstimado ;
        });
    }

    function obtenerPrecioEstimado(tipoConsulta) {
        var precio = '';

        switch (tipoConsulta) {
            case 'Consulta':
                precio = '30';
                break;
            case 'Examen':
                precio = '50 - 60';
                break;
            case 'Operación':
                precio = '800 - 1000, puede varias dependiendo el tipo de operación.';
                break;
            case 'Baño':
                precio = '30';
                break;
        }

        return precio;
    }
</script>
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection
