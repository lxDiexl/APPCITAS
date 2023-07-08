@extends('layouts.panel')

@section('content')
    <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h3 style="letter-spacing: 3px;">Nueva especialidad</h3>

                        </div>

                        <div class="col-lg-6 col-5 my-auto text-end">
                            <a href="{{ url('/especialidades') }}" class="btn btn-sm btn-info"><i
                                    class="fas fa-arrow-alt-circle-left" style="font-size:15px;"></i> Regresar</a>
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
                    <form action="{{ url('/especialidades') }}" method="POST" class="form"
                        style="display:flex; flex-direction:column;">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nombre de la especialidad</label>
                            <input
                                style="padding: 0.5rem;
                            border-radius: 0.25rem;
                            border: 1px solid #ced4da;
                            background-color: #fff;
                            width: 100%;
                            font-size: 1rem;
                            line-height: 1.5;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;"
                                type="text" name="name" class="form-control" value="{{old('name')}}">
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
                                type="text" name="description" class="form-control" value="{{old('desription')}}">
                        </div>
                        <div class="d-flex justify-content-end"
                            style="display: block;
                        margin-top: 20px;">
                            <button style="
                                color: #fff;" type="submit"
                                class="btn btn-primary">Crear especialidad</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
