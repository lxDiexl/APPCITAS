@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h3 style="letter-spacing: 3px;">Editar especialidad</h3>

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
                            <a href="{{ url('/especialidades') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-arrow-alt-circle-left"></i> Regresar</a>
                        </div>
                    </div>

                </div>
                <div class="card-body">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert" style="color:white;">
                                <i style="color:white;" class="fas fa-exclamation-triangle"></i>
                                <strong style="color:white;">Por favor!</strong> {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <form action="{{url('/especialidades/'.$specialty->id)}}" method="POST" class="form"
                        style="display:flex; flex-direction:column;">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Nombre de la especialidad </label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="name" class="form-control" value="{{old('name',$specialty->name)}}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="description" class="form-control" value="{{old('description',$specialty->description)}}">
                        </div>
                        <div class="d-flex justify-content-end"
                            style="display: block;
                        margin-top: 20px;">
                            <button style="
                                color: #fff;" type="submit"
                                class="btn btn-primary">Guardar especialidad</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
