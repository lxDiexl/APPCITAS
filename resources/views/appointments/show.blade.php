@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h2 style="letter-spacing: 3px;">Cita #{{ $appointment->id }}</h2>

                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="{{ url('/miscitas') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-arrow-alt-circle-left" style="font-size:15px;"></i> Regresar</a>
                        </div>
                    </div>

                </div>
                <style>
                    #negrita {
                        color: black;
                    }

                    .searchbar {
                        margin-bottom: auto;
                        margin-top: auto;
                        height: 60px;
                        background-color: #353434;
                        border-radius: 30px;
                        padding: 10px;
                    }

                    .search_input {
                        color: white;
                        border: 0;
                        outline: 0;
                        background: none;
                        width: 0;
                        caret-color: transparent;
                        line-height: 40px;
                        transition: width 0.4s linear;
                    }

                    .searchbar:hover>.search_input {
                        padding: 0 10px;
                        width: 450px;

                        transition: width 0.4s linear;
                    }

                    .searchbar:hover>.search_icon {
                        background: white;

                    }

                    .search_icon {
                        height: 40px;
                        width: 40px;
                        float: right;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border-radius: 50%;
                        color: black;
                        text-decoration: none;
                    }

                    ::placeholder {
                        color: white;
                    }

                    .button-85 {
                        padding: 0.6em 2em;
                        border: none;
                        outline: none;
                        color: rgb(255, 255, 255);
                        background: #111;
                        cursor: pointer;
                        position: relative;
                        z-index: 0;
                        border-radius: 10px;
                        user-select: none;
                        -webkit-user-select: none;
                        touch-action: manipulation;
                    }

                    .button-85:before {
                        content: "";
                        background: linear-gradient(45deg,
                                #ff0000,
                                #ff7300,
                                #fffb00,
                                #48ff00,
                                #00ffd5,
                                #002bff,
                                #7a00ff,
                                #ff00c8,
                                #ff0000);
                        position: absolute;
                        top: -2px;
                        left: -2px;
                        background-size: 400%;
                        z-index: -1;
                        filter: blur(5px);
                        -webkit-filter: blur(5px);
                        width: calc(100% + 4px);
                        height: calc(100% + 4px);
                        animation: glowing-button-85 20s linear infinite;
                        transition: opacity 0.3s ease-in-out;
                        border-radius: 10px;
                    }

                    @keyframes glowing-button-85 {
                        0% {
                            background-position: 0 0;
                        }

                        50% {
                            background-position: 400% 0;
                        }

                        100% {
                            background-position: 0 0;
                        }
                    }

                    .button-85:after {
                        z-index: -1;
                        content: "";
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        background: #222;
                        left: 0;
                        top: 0;
                        border-radius: 10px;
                    }

                    .shadow__btn {
                        padding: 10px 20px;
                        border: none;
                        font-size: 17px;
                        color: #fff;
                        border-radius: 7px;
                        letter-spacing: 4px;
                        font-weight: 700;
                        text-transform: uppercase;
                        transition: 0.5s;
                        transition-property: box-shadow;
                    }

                    .shadow__btn {
                        background: rgb(191, 42, 42);
                        box-shadow: 0 0 25px rgb(191, 42, 42);
                    }

                    .shadow__btn:hover {
                        box-shadow: 0 0 5px rgb(191, 42, 42),
                            0 0 25px rgb(191, 42, 42),
                            0 0 50px rgb(191, 42, 42),
                            0 0 100px rgb(191, 42, 42);
                    }

                    .shadow__btn2 {
                        padding: 12px 20px;
                        border: none;
                        font-size: 17px;
                        color: #fff;
                        border-radius: 7px;
                        letter-spacing: 4px;
                        font-weight: 700;
                        text-transform: uppercase;
                        transition: 0.5s;
                        transition-property: box-shadow;
                    }

                    .shadow__btn2 {
                        background: rgb(76, 109, 142);
                        box-shadow: 0 0 25px rgb(76, 109, 142);
                    }

                    .shadow__btn2:hover {
                        box-shadow: 0 0 5px rgb(76, 109, 142),
                            0 0 25px rgb(76, 109, 142),
                            0 0 50px rgb(76, 109, 142),
                            0 0 100px rgb(76, 109, 142);
                    }
                </style>

                <div class="card-body">
                    <ul>
                        <dd>
                            <strong>Fecha: </strong>{{ $appointment->scheduled_date }}
                        </dd>
                        <dd>
                            <strong>Hora de atención: </strong>{{ $appointment->scheduled_time12 }}
                        </dd>
                        @if ($role == 'Cliente' || $role == 'Admin')
                            <dd>
                                <strong>Veterinario: </strong>{{ $appointment->doctor->name }}
                            </dd>
                        @endif
                        @if ($role == 'Medico' || $role == 'Admin')
                            <dd>
                                <strong>Cliente: </strong>{{ $appointment->patient->name }}
                            </dd>
                        @endif
                        <dd>
                            <strong>Especialidad: </strong>{{ $appointment->specialty->name }}
                        </dd>
                        <dd>
                            <strong>Tipo consulta: </strong>{{ $appointment->type }}
                        </dd>
                        <dd>
                            <strong>Estado: </strong>
                            @if ($appointment->status == 'Cancelada')
                                <span class="badge" style="color:red; ">Cancelada</span>
                            @else
                                <span class="badge" style="color:#41ED33; ">{{ $appointment->status }}</span>
                            @endif
                        </dd>
                        <dd>
                            <strong>Síntomas: </strong>{{ $appointment->description }}
                        </dd>
                    </ul>
                </div>
                @if ($appointment->status == 'Cancelada')
                    <div class="card-body">
                        <div class="alert text-primary" style="background: #BAA9E2">
                            <h3>Detalles de la cancelación</h3>
                            @if ($appointment->cancellation)
                                <ul>
                                    <li>
                                        <strong>Fecha de cancelación</strong>
                                        {{ $appointment->cancellation->created_at }}
                                    </li>
                                    <li>
                                        <strong>La cita fue cancelada por: </strong>
                                        {{ $appointment->cancellation->cancelled_by->name }}
                                    </li>
                                    <li>
                                        <strong>Motivo de la cancelación: </strong>
                                        {{ $appointment->cancellation->justification }}
                                    </li>
                                </ul>
                            @else
                                <ul>
                                    <li>La cita fue cancelada antes de su confirmación</li>
                                </ul>
                            @endif


                        </div>
                    </div>
                @endif

                <!-- Fonts -->


                {{-- <div class="card-body">
                        {{ $clientes->links() }}
                    </div> --}}
            </div>
        </div>
    </div>
    </div>
@endsection
