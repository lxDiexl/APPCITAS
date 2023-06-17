@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h2 style="letter-spacing: 3px;">Cancelar Cita</h2>

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
                    @if (session('notification'))
                        <div class="alert alert-success" style="color:white;"role="alert">
                            {{ session('notification') }}
                        </div>
                    @endif



                    <div class="card-body px-0 pb-2">
                        @if ($role == 'Cliente')
                            <p style="color:black;">Se cancelará tu cita reservada con el veterinario <b
                                    id="negrita">{{ $appointment->doctor->name }}</b>

                                (especialidad: <b id="negrita">{{ $appointment->specialty->name }}</b>) para el día <b
                                    id="negrita">{{ $appointment->scheduled_date }}</b>.</p>
                        @elseif($role == 'Medico')
                            <p style="color:black;">Se cancelará la cita reservada del paciente <b
                                    id="negrita">{{ $appointment->patient->name }}</b>

                                (especialidad: <b id="negrita">{{ $appointment->specialty->name }}</b>) para el día <b
                                    id="negrita">{{ $appointment->scheduled_date }}</b>.
                                <b id="negrita">{{ $appointment->scheduled_time12 }}</b>.
                            </p>
                        @else
                            <p style="color:black;">Se cancelará la cita reservada del paciente <b
                                    id="negrita">{{ $appointment->patient->name }} que sera atentidido por el
                                    veterinario</b>
                                <b>{{ $appointment->doctor->name }}</b>
                                (especialidad: <b id="negrita">{{ $appointment->specialty->name }}</b>) para el día <b
                                    id="negrita">{{ $appointment->scheduled_date }}</b>.
                                <b id="negrita">{{ $appointment->scheduled_time12 }}</b>.
                            </p>
                        @endif
                        <form action="{{ url('/miscitas/' . $appointment->id . '/cancel') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="justification">Ponga los motivos de la cancelación</label>
                                <textarea name="justification" id="justification" rows="3" class="form-control" style="border: 1px solid black"
                                    required></textarea>
                            </div>
                            <br>
                            <button class="btn btn-danger" type="submit">Cancelar Cita</button>
                        </form>
                    </div>
                </div>

                <!-- Fonts -->


                {{-- <div class="card-body">
                        {{ $clientes->links() }}
                    </div> --}}
            </div>
        </div>
    </div>
    </div>
@endsection
