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
                            <h3 style="letter-spacing: 3px;">Editar Perfil</h3>

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

                    @if (session('notification'))

                            <div class="alert alert-success" role="alert" style="color:white;">
                                {{session('notification')}}
                            </div>

                    @endif
                    <form action="{{ url('/profile') }}" method="POST" class="form"
                        style="display:flex; flex-direction:column;">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre completo</label>
                           <input name="name" id="name" type="text" class="form-control" value="{{old('name',$user->name)}}" style="border: 1px solid black" required></input>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellido completo</label>
                           <input name="lastname" id="lastname" type="text" class="form-control" value="{{old('lastname',$user->lastname)}}" style="border: 1px solid black" required></input>
                        </div>
                        <div class="form-group">
                            <label for="phone">Número de telefono</label>
                           <input name="phone" id="phone" type="text" class="form-control" minlength="9" maxlength="9" value="{{old('phone', $user->phone)}}" style="border: 1px solid black" required></input>
                        </div>
                        <div class="form-group">
                            <label for="location">Ubicación</label>
                           <input name="location" id="location" type="text" class="form-control" value="{{old('location', $user->location)}}" style="border: 1px solid black" required></input>
                        </div>
                </div>

                <div class="d-flex justify-content-center" style="display: block;
                        margin-top: 20px;">
                    <button style="
                                color: #fff;" type="submit"
                        class="btn btn-primary">Guardar
                        Cambios</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
@endsection
