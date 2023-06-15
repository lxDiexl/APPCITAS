@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h2 style="letter-spacing: 3px;">CLIENTES</h2>

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
                            <a href="{{ url('/clientes/create') }}" class="btn btn-sm btn-success">Nuevo Cliente</a>
                        </div>
                    </div>

                </div>
                <style>
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
                </div>
                <form id="searchForm" action="{{ url('/clientes') }}" method="GET" style="margin-left: 30px;">
                    <div class="d-flex justify-content-right h-100">
                        <div class="searchbar">
                            <input class="search_input" type="text" name="search" placeholder="Buscar Clientes">
                            <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                        </div>
                    </div>

                </form>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-center text-sm text-xxs font-weight-bolder  ">
                                        ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        Nombres</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Apellidos</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        Teléfono</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Direccion</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Email</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td class="align-middle text-center text-sm" scope="row">
                                            {{ $cliente->id }}
                                        </td>
                                        <td scope="row" class="text-center">
                                            {{ $cliente->name }}
                                        </td>
                                        <td scope="row" class="text-center">
                                            {{ $cliente->lastname }}
                                        </td>
                                        <td scope="row" class="text-center">
                                            {{ $cliente->phone }}
                                        </td>
                                        <td scope="row" class="text-center">
                                            {{ $cliente->location }}
                                        </td>
                                        <td scope="row" class="text-center">
                                            {{ $cliente->email }}
                                        </td>
                                        <td class="align-middle text-center text-sm">

                                            <form action="{{ url('/clientes/' . $cliente->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ url('/clientes/' . $cliente->id . '/edit') }}"
                                                    class="shadow__btn2" style="color:white;"><i
                                                    class='fas fa-edit' ></i></a>

                                                    <button type="submit" class="shadow__btn" role="button"><i
                                                        class='fas fa-trash-alt' style="font-size:20px; "></i></button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        {{ $clientes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
