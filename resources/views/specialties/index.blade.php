@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h2 style="letter-spacing: 3px;">ESPECIALIDADES</h2>

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
                            <a href="{{ url('/especialidades/create') }}" class="btn btn-sm btn-success">Nueva
                                especialidad</a>
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
                </style>

                <div class="card-body">
                    @if (session('notification'))
                        <div class="alert alert-success" style="color:white;"role="alert">
                            {{ session('notification') }}
                        </div>
                    @endif
                </div>
               <form id="searchForm" action="{{ url('/especialidades') }}" method="GET" style="margin-left: 30px;">
                    <div class="d-flex justify-content-right h-100">
                        <div class="searchbar">
                            <input class="search_input" type="text" name="search" placeholder="Buscar especialidad">
                            <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    
                </form> 

                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-uppercase text-secondary text-center text-sm text-xxs font-weight-bolder  ">
                                        ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ">
                                        Nombre</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Descripcion</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">
                                        Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($specialties as $especialidad)
                                    <tr>
                                        <td class="align-middle text-center text-sm" scope="row">
                                            {{ $especialidad->id }}
                                        </td>
                                        <td scope="row" class="">
                                            {{ $especialidad->name }}
                                        </td>
                                        <td scope="row" class="">
                                            {{ $especialidad->description }}
                                        </td>
                                        <td class="align-middle text-center text-sm">

                                            <form action="{{ url('/especialidades/' . $especialidad->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ url('/especialidades/' . $especialidad->id . '/edit') }}"
                                                    class="btn btn-sm btn-danger">Editar</a>
                                                <button type="submit" class="btn btn-sm btn-primary">Eliminar</button>
                                            </form>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        {{$specialties->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
