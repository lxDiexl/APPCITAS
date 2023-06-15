@extends('layouts.panel')


@section('content')

    <form action="{{ url('/horario') }}" method="POST">
        @csrf
        <div class="row mb-4">

            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h2 style="letter-spacing: 3px;">Gestionar Horario</h2>

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
                                <button type="submit" class="btn btn-sm btn-success">Guardar Cambios</button>
                            </div>
                        </div>

                    </div>
                    <style>
                        .searchbar {
                            margin-bottom: auto;
                            margin-top: auto;
                            height: 60px;
                            background-color: #d2bceb;
                            border-radius: 30px;
                            padding: 10px;
                        }

                        .search_input {
                            color: black;
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
                            caret-color: red;
                            transition: width 0.4s linear;
                        }

                        .searchbar:hover>.search_icon {
                            background: white;
                            color: #e74c3c;
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
                            color: black;
                        }

                        .checkbox-wrapper-25 input[type="checkbox"] {
                            background-image: -webkit-linear-gradient(hsla(0, 0%, 0%, .1), hsla(0, 0%, 100%, .1)),
                                -webkit-linear-gradient(left, #f66 50%, #6cf 50%);
                            background-size: 100% 100%, 200% 100%;
                            background-position: 0 0, 15px 0;
                            border-radius: 25px;
                            box-shadow: inset 0 1px 4px hsla(0, 0%, 0%, .5),
                                inset 0 0 10px hsla(0, 0%, 0%, .5),
                                0 0 0 1px hsla(0, 0%, 0%, .1),
                                0 -1px 2px 2px hsla(0, 0%, 0%, .25),
                                0 2px 2px 2px hsla(0, 0%, 100%, .75);
                            cursor: pointer;
                            height: 25px;
                            padding-right: 25px;
                            width: 75px;
                            -webkit-appearance: none;
                            -webkit-transition: .25s;
                        }

                        .checkbox-wrapper-25 input[type="checkbox"]:after {
                            background-color: #eee;
                            background-image: -webkit-linear-gradient(hsla(0, 0%, 100%, .1), hsla(0, 0%, 0%, .1));
                            border-radius: 25px;
                            box-shadow: inset 0 1px 1px 1px hsla(0, 0%, 100%, 1),
                                inset 0 -1px 1px 1px hsla(0, 0%, 0%, .25),
                                0 1px 3px 1px hsla(0, 0%, 0%, .5),
                                0 0 2px hsla(0, 0%, 0%, .25);
                            content: '';
                            display: block;
                            height: 25px;
                            width: 50px;
                        }

                        .checkbox-wrapper-25 input[type="checkbox"]:checked {
                            background-position: 0 0, 35px 0;
                            padding-left: 25px;
                            padding-right: 0;
                        }
                    </style>
                    <div class="card-body">
                        @if (session('notification'))
                            <div class="alert alert-success" style="color:white;"role="alert">
                                {{ session('notification') }}
                            </div>
                        @endif

                        @if (session('errors'))
                            <div class="alert alert-danger" style="color:white;"role="alert">
                                Los cambios se han guardado, pero se encontraron las siguientes novedades:
                                <ul>
                                    @foreach (session('errors') as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif
                    </div>
                    {{-- <form id="searchForm" action="{{ url('/medicos') }}" method="GET" style="margin-left: 30px;">
                        <div class="d-flex justify-content-right h-100">
                            <div class="searchbar">
                                <input class="search_input" type="text" name="search" placeholder="Buscar Medicos">
                                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                            </div>
                        </div>

                    </form> --}}
                    <link rel="stylesheet"
                     href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                    <div class="card-body px-5 pb-2">
                        <div class="table-responsive">
                            <table class="table align-middle table-flush">

                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Día</th>
                                        <th scope="col">Activo</th>
                                        <th scope="col">Turno mañana</th>
                                        <th scope="col">Turno tarde</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($horarios as $key => $horario)
                                        <tr>
                                            <th> {{ $days[$key] }}</th>
                                            <td>
                                                <div class="checkbox-wrapper-25">
                                                    <input type="checkbox" name="active[]" value="{{ $key }}"
                                                        @if ($horario->active) checked @endif>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">

                                                        <select class="form-control" name="morning_start[]">

                                                            @for ($i = 8; $i <= 11; $i++)
                                                                <option value="{{ ($i < 10 ? '0' : '') . $i }}:00"
                                                                    @if ($i . ':00 AM' == $horario->morning_start) selected @endif>
                                                                    {{ $i }}:00 AM</option>
                                                                <option value="{{ ($i < 10 ? '0' : '') . $i }}:30"
                                                                    @if ($i . ':30 AM' == $horario->morning_start) selected @endif>
                                                                    {{ $i }}:30 AM</option>
                                                            @endfor
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                        <select class="form-control" name="morning_end[]">
                                                            @for ($i = 8; $i <= 11; $i++)
                                                                <option value="{{ ($i < 10 ? '0' : '') . $i }}:00"
                                                                    @if ($i . ':00 AM' == $horario->morning_end) selected @endif>
                                                                    {{ $i }}:00 AM</option>
                                                                <option value="{{ ($i < 10 ? '0' : '') . $i }}:30"
                                                                    @if ($i . ':30 AM' == $horario->morning_end) selected @endif>
                                                                    {{ $i }}:30 AM</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select class="form-control" name="afternoon_start[]">
                                                            @for ($i = 2; $i <= 11; $i++)
                                                                <option value="{{ $i + 12 }}:00"
                                                                    @if ($i . ':00 PM' == $horario->afternoon_start) selected @endif>
                                                                    {{ $i }}:00 PM</option>
                                                                <option value="{{ $i + 12 }}:30"
                                                                    @if ($i . ':30 PM' == $horario->afternoon_start) selected @endif>
                                                                    {{ $i }}:30 PM</option>
                                                            @endfor
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                        <select class="form-control" name="afternoon_end[]">
                                                            @for ($i = 2; $i <= 11; $i++)
                                                                <option value="{{ $i + 12 }}:00"
                                                                    @if ($i . ':00 PM' == $horario->afternoon_end) selected @endif>
                                                                    {{ $i }}:00 PM</option>
                                                                <option value="{{ $i + 12 }}:30"
                                                                    @if ($i . ':30 PM' == $horario->afternoon_end) selected @endif>
                                                                    {{ $i }}:30 PM</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>


@endsection
